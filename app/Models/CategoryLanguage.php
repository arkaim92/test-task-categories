<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoryLanguage extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'language_id'
    ];

    public function language() : BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
