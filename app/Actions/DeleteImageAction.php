<?php

namespace App\Actions;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class DeleteImageAction
{
    public function execute(Image $image): void {
        if(Storage::disk('public')->exists($image->path)) {
            Storage::disk('public')->delete($image->path);
        }
        $image->delete();
    }
}
