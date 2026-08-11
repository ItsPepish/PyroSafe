<?php

namespace App\Actions;

use App\Models\Publication;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DeletePublicationAction
{
    public function execute(Publication $publication): void {
        $publication->loadMissing('coverImage');
        $coverImage = $publication->coverImage;

        DB::transaction(function() use($publication) {
            $publication->delete();
        });

        if($coverImage) {
            if(Storage::disk('public')->exists($coverImage->path)) {
                Storage::disk('public')->delete($coverImage->path);
            }
            $coverImage->delete();
        }
    }
}
