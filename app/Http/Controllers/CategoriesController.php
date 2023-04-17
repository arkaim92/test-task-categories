<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Language;
use App\Repositories\CategoryRepository;
use App\Services\CategoryService;

class CategoriesController extends Controller
{
    public function __construct(
        private CategoryService $categoryService,
        private CategoryRepository $categoryRepository
    ) {
    }

    public function index(Language $language)
    {
        $languages = Language::all();
        $categories = $this->categoryRepository
            ->getCategoriesToUpdate($language)
            ->get();

        return view('category', [
            'categories' => $categories,
            'languages' => $languages,
            'currentLang' => $language->code,
        ]);
    }

    public function update(Language $language, CategoryUpdateRequest $request)
    {
        $this->categoryService->update($language, $request->validated('title'));
        return redirect()->refresh();
    }
}
