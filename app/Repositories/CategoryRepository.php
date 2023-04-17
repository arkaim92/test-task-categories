<?php

namespace App\Repositories;

use App\Models\Language;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\JoinClause;

class CategoryRepository
{
    public function getCategoriesToUpdate(Language $language): HasMany
    {
        return $language
            ->categories()
            ->selectRaw('categories.id, category_languages.title, parent_category_languages.title as parent_title')
            ->join('categories', 'categories.id', '=', 'category_id')
            ->leftJoin('category_languages as parent_category_languages', function (JoinClause $query) use ($language) {
                $query->on('categories.parent_id', '=', 'parent_category_languages.category_id')
                    ->where('parent_category_languages.language_id', $language->id);
            })
//            ->where('parent_category_languages.language_id', $language->id)
            ->orderBy('categories.id');
    }
}