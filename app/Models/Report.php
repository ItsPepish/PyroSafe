<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['type', 'description', 'urgency', 'address_reference', 'latitude', 'longitude'])]
class Report extends Model {
    use HasFactory;

    public function images(): BelongsToMany {
        return $this->belongsToMany(Image::class)
            ->withTimestamps();
    }

    protected function casts(): array {
        return [
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7'
        ];
    }
}
