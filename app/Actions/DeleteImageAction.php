<?php

namespace App\Actions;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class DeleteImageAction
{
    public function execute(Image $image): void
    {
        $path = $image->path;

        $image->delete();

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
