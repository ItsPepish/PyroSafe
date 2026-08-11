<?php

namespace App\Actions;

use App\Models\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Image as ImageFacade;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RuntimeException;

class StorePublicationCoverImageAction
{
    public function execute(UploadedFile $coverImage): Image
    {
        $processedImage = ImageFacade::fromUpload($coverImage)
            ->toWebp()
            ->quality(80);
        $filenameUnique = Str::uuid().'.webp';
        $path = $processedImage->storeAs('publications/covers', $filenameUnique, 'public');

        if (! $path) {
            throw new RuntimeException('No se pudo guardar la imagen de portada.');
        }

        return Image::create([
            'filename' => $filenameUnique,
            'original_name' => $coverImage->getClientOriginalName(),
            'path' => $path,
            'mime_type' => $processedImage->mimeType(),
            'size_bytes' => Storage::disk('public')->size($path),
            'width' => $processedImage->width(),
            'height' => $processedImage->height(),
            'alt_text' => null,
        ]);
    }
}
