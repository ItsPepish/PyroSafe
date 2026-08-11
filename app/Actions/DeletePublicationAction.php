<?php

namespace App\Actions;

use App\Models\Publication;
use Illuminate\Support\Facades\DB;

class DeletePublicationAction
{
    public function __construct(private DeleteImageAction $deleteImage) {}

    public function execute(Publication $publication): void {
        $publication->loadMissing('coverImage');
        $coverImage = $publication->coverImage;

        DB::transaction(function() use($publication) {
            $publication->delete();
        });

        if($coverImage) {
            $this->deleteImage->execute($coverImage);
        }
    }
}
