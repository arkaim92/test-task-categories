<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'parent_id'
    ];


    public function languages(): HasMany
    {
        return $this->hasMany(CategoryLanguage::class, 'category_id');
    }
}
