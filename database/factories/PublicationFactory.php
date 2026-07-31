<?php

namespace Database\Factories;

use App\Models\Publication;
use App\Enums\PublicationStatus;
use App\Models\Category;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Publication>
 */
class PublicationFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $title = fake()->unique()->sentence(4);
        return [
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'cover_image_id' => Image::factory(),
            'title' => $title,
            'slug' => str($title)->slug(),
            'summary' => fake()->paragraph(),
            'content' => fake()->paragraphs(5, true),
            'status' => PublicationStatus::Draft,
            'published_at' => null,
        ];
    }

    public function withImages(int $count = 3): static {
        return $this->afterCreating(function (Publication $publication) use ($count): void {
            Image::factory()
                ->count($count)
                ->create()
                ->each(function (Image $image, int $index) use ($publication): void {
                    $publication->images()->attach($image->id, [
                        'position' => $index + 1,
                    ]);
                });
        });
    }
}
