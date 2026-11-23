<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        // 'stock',
        // 'category_id'
    ];
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
