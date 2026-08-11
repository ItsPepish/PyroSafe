<?php

namespace App\Actions;

use App\Enums\PublicationStatus;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;

class UpdatePublicationAction
{
    public function __construct(private StorePublicationCoverImageAction $storePublicationCoverImage){}

    public function execute(Publication $publication, array $data): Publication {
        return DB::transaction(function() use ($publication, $data) {
            $coverImageId = $publication->cover_image_id;

            if(isset($data['cover_image'])) {
                $coverImage = $this->storePublicationCoverImage->execute($data['cover_image']);
                $coverImageId = $coverImage->id;
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

            return $publication;
        });
    }
}
