<?php

namespace App\Services;

use App\Models\Language;

class CategoryService
{

    public function update(Language $language, array $categories): void
    {
        foreach ($categories as $id => $category) {
           $language->categories()->where('category_id', $id)->update(
                ['title' => $category]
            );
        }
    }
}