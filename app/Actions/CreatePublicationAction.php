<?php

namespace App\Actions;

use App\Enums\PublicationStatus;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreatePublicationAction
{
    public function __construct(private StorePublicationCoverImageAction $storePublicationCoverImage){}

    public function execute(array $data): Publication
    {
        $coverImage = $this->storePublicationCoverImage->execute($data['cover_image']);

        return DB::transaction(function () use ($data, $coverImage) {
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
    }
}
