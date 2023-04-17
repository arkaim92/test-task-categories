<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'code'
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(CategoryLanguage::class, 'language_id');
    }
}
