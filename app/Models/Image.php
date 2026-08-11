<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['filename', 'original_name', 'path', 'mime_type', 'size_bytes', 'width', 'height', 'alt_text'])]
class Image extends Model {
    use HasFactory;

    public function reports(): BelongsToMany {
        return $this->belongsToMany(Report::class)
            ->withTimestamps();
    }

    public function coverForPublications(): HasMany {
        return $this->hasMany(Publication::class, 'cover_image_id');
    }
}
