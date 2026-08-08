<?php

namespace App\Models;

use App\Enums\PublicationStatus;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['category_id', 'user_id', 'cover_image_id', 'title', 'slug', 'summary', 'content', 'status', 'published_at'])]
class Publication extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function coverImage(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'cover_image_id');
    }

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class)
            ->withPivot('position')
            ->withTimestamps();
    }

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'status' => PublicationStatus::class,
        ];
    }

    protected $attributes = [
        'status' => PublicationStatus::Draft->value,
    ];
}
