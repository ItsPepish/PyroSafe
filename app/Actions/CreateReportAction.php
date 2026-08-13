<?php

namespace App\Actions;

use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateReportAction
{
    public function __construct(private StoreWebpImageAction $storeWebpImage) {}

    public function execute(array $data, string $ipAddress): Report
    {
        $images = $data['images'] ?? [];
        unset($data['images']);
        $data['ip_address'] = $ipAddress;
        $data['folio'] = 'RPT-'.now()->format('Ymd').'-'.Str::upper(Str::random(6));

        return DB::transaction(function () use($data, $images) {
            $report = Report::create($data);

            $storedImageIds = [];

            foreach($images as $image) {
                $storedImage = $this->storeWebpImage->execute($image, 'reports');
                $storedImageIds[] = $storedImage->id;
            }

            if($storedImageIds !== []) {
                $report->images()->attach($storedImageIds);
            }

            return $report;
        });
    }
}
