<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property bool $is_publish
 * @property Carbon $published_at
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title', 'body',
        'is_publish', 'published_at',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'is_publish' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function isPublished(): bool
    {
        return $this->is_publish && $this->published_at;
    }
}
