<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Enums\ReportStatus;
use App\Enums\ReportType;
use App\Enums\ReportUrgency;

#[Fillable(['folio', 'type', 'description', 'urgency', 'street_address', 'address_reference', 'latitude', 'longitude', 'ip_address'])]
class Report extends Model {
    use HasFactory;

    public function images(): BelongsToMany {
        return $this->belongsToMany(Image::class)
            ->withTimestamps();
    }

    protected function casts(): array {
        return [
            'type' => ReportType::class,
            'urgency' => ReportUrgency::class,
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
            'status' => ReportStatus::class,
        ];
    }

    protected $attributes = [
        'status' => ReportStatus::Pending->value,
    ];
}
