<?php

namespace App\Actions;

use App\Enums\PublicationStatus;
use App\Models\Image;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Image as ImageFacade;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RuntimeException;

class CreatePublicationAction
{
    public function execute(array $data): Publication
    {
        $path = null;

        try {
            $processedImage = ImageFacade::fromUpload($data['cover_image'])->toWebp()->quality(80);
            $filenameUnique = Str::uuid().'.webp';
            $path = $processedImage->storeAs('publications/covers', $filenameUnique, 'public');

            if (! $path) {
                throw new RuntimeException('No se pudo guardar la imagen de portada.');
            }

            return DB::transaction(function () use ($data, &$path, $filenameUnique, $processedImage) {
                $coverImage = Image::create([
                    'filename' => $filenameUnique,
                    'original_name' => $data['cover_image']->getClientOriginalName(),
                    'path' => $path,
                    'mime_type' => $processedImage->mimeType(),
                    'size_bytes' => Storage::disk('public')->size($path),
                    'width' => $processedImage->width(),
                    'height' => $processedImage->height(),
                    'alt_text' => null,
                ]);

                $publishedAt = ($data['status'] === PublicationStatus::Published->value) ? now() : null;

                $baseSlug = Str::slug($data['title']);
                $slug = $baseSlug;
                $counter = 2;

                while (Publication::where('slug', $slug)->exists()) {
                    $slug = $baseSlug.'-'.$counter;
                    $counter++;
                }

                return Publication::create([
                    'category_id' => $data['category_id'],
                    'user_id' => Auth::id(),
                    'cover_image_id' => $coverImage->id,
                    'title' => $data['title'],
                    'slug' => $slug,
                    'summary' => $data['summary'],
                    'content' => $data['content'],
                    'status' => $data['status'],
                    'published_at' => $publishedAt,
                ]);
            });
        } catch (\Throwable $exception) {
            if ($path && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }

            throw $exception;
        }
    }
}
