<?php

namespace App\Actions;

use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateReportAction
{
    public function __construct(private StoreWebpImageAction $storeWebpImage, private DeleteImageAction $deleteImage) {}

    public function execute(array $data, string $ipAddress): Report
    {
        $images = $data['images'] ?? [];
        unset($data['images']);
        $storedImages = [];
        $data['ip_address'] = $ipAddress;
        $data['folio'] = $this->generateFolio();

        try {
            foreach ($images as $image) {
                $storedImage = $this->storeWebpImage->execute($image, 'reports');
                $storedImages[] = $storedImage;
            }

            return DB::transaction(function () use ($data, $storedImages) {
                $report = Report::create($data);

                $storedImageIds = collect($storedImages)->pluck('id')->all();

                if ($storedImageIds !== []) {
                    $report->images()->attach($storedImageIds);
                }

                return $report;
            });
        } catch (\Throwable $exception) {
            foreach ($storedImages as $storedImage) {
                $this->deleteImage->execute($storedImage);
            }
            throw $exception;
        }
    }

    private function generateFolio(): string
    {
        do {
            $folio = 'RPT-'.now()->format('Ymd').'-'.Str::upper(Str::random(6));
        } while (Report::where('folio', $folio)->exists());

        return $folio;
    }
}
