<?php

namespace Database\Factories;

use App\Models\Report;
use App\Models\Image;
use App\Enums\ReportStatus;
use App\Enums\ReportType;
use App\Enums\ReportUrgency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Report>
 */
class ReportFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'folio' => 'RPT-'.fake()->unique()->numerify('######'),
            'type' => fake()->randomElement(ReportType::cases()),
            'description' => fake()->paragraph(),
            'urgency' => fake()->randomElement(ReportUrgency::cases()),
            'address_reference' => fake()->streetAddress().', Tultepec, Estado de México',
            'latitude' => fake()->latitude(14, 33),
            'longitude' => fake()->longitude(-118, -86),
            'status' => ReportStatus::Pending,
            'ip_address' => fake()->ipv4(),
        ];
    }

    public function withImages(int $count = 2): static {
        return $this->afterCreating(function (Report $report) use ($count): void {
            Image::factory()
                ->count($count)
                ->create()
                ->each(function (Image $image) use ($report): void {
                    $report->images()->attach($image->id);
                });
        });
    }
}
