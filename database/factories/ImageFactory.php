<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Image>
 */
class ImageFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $filename = fake()->uuid().'.webp';
        return [
            'filename' => $filename,
            'original_name' => fake()->word() . '.jpg',
            'path' => 'images/'.$filename,
            'mime_type' => 'image/webp',
            'size_bytes' => fake()->numberBetween(50_000, 2_000_000),
            'width' => fake()->numberBetween(800, 1920),
            'height' => fake()->numberBetween(600, 1080),
            'alt_text' => fake()->sentence(6)
        ];
    }
}
