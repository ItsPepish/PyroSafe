<?php

namespace App\Actions;

use App\Enums\PublicationStatus;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;

class UpdatePublicationAction
{
    public function __construct(private StorePublicationCoverImageAction $storePublicationCoverImage, private DeleteImageAction $deleteImage){}

    public function execute(Publication $publication, array $data): Publication {
        return DB::transaction(function() use ($publication, $data) {
            $newCoverImage = null;
            $oldCoverImage = $publication->coverImage;
            $coverImageId = $publication->cover_image_id;

            if(isset($data['cover_image'])) {
                $newCoverImage = $this->storePublicationCoverImage->execute($data['cover_image']);
                $coverImageId = $newCoverImage->id;
            }

            $publishedAt = ($data['status'] === PublicationStatus::Published->value) ? (($publication->published_at) ? $publication->published_at : now()) : null;

            $publication->update([
                'category_id' => $data['category_id'],
                'cover_image_id' => $coverImageId,
                'title' => $data['title'],
                'summary' => $data['summary'],
                'content' => $data['content'],
                'status' => $data['status'],
                'published_at' => $publishedAt,
            ]);

            if($newCoverImage !== null && $oldCoverImage) {
                $this->deleteImage->execute($oldCoverImage);
            }

            return $publication;
        });
    }
}
