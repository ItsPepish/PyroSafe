<?php

namespace App\Actions;

use App\Models\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Image as ImageFacade;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RuntimeException;

class StoreWebpImageAction
{
    public function execute(UploadedFile $image, string $directory): Image
    {
        $path = null;

        try {
            $processedImage = ImageFacade::fromUpload($image)
                ->toWebp()
                ->quality(80);
            $filenameUnique = Str::uuid().'.webp';
            $path = $processedImage->storeAs($directory, $filenameUnique, 'public');

            if (! $path) {
                throw new RuntimeException('No se pudo guardar la imagen.');
            }

            return Image::create([
                'filename' => $filenameUnique,
                'original_name' => $image->getClientOriginalName(),
                'path' => $path,
                'mime_type' => $processedImage->mimeType(),
                'size_bytes' => Storage::disk('public')->size($path),
                'width' => $processedImage->width(),
                'height' => $processedImage->height(),
                'alt_text' => null,
            ]);
        } catch (\Throwable $exception) {
            if ($path !== null && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            throw $exception;
        }
    }
}
