<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'address', 'latitude', 'longitude', 'description', 'business_hours', 'phone', 'is_visible'])]
class Establishment extends Model {
    use HasFactory;

    protected function casts(): array {
        return [
            'latitude' => 'decimal:7',
            'longitude' => 'decimal:7',
            'is_visible' => 'boolean',
        ];
    }

    protected $attributes = [
        'is_visible' => true
    ];
}
