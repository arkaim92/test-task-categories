<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run() : void
    {
        $categoriesLevelOne = [
            [
                'parent_id' => null,
                'title' => [
                    'en' => 'Sport and Active Rest',
                    'ru' => 'Спорт и активній отдых'
                ],
            ],
            [
                'parent_id' => null,
                'title' => [
                    'en' => 'Home and Garden',
                    'ru' => 'Дом и сад'
                ],
            ],
            [
                'parent_id' => null,
                'title' => [
                    'en' => 'Food And Drinks',
                    'ru' => 'Еда и напитки'
                ],
            ],
        ];

        $categoriesLevelTwo = [
            [
                'parent_id' => 2,
                'title' => [
                    'en' => 'Paints and Varnishes',
                    'ru' => 'Краски и лаки'
                ],
            ],
            [
                'parent_id' => 3,
                'title' => [
                    'en' => 'Drinks',
                    'ru' => 'Напитки'
                ],
            ],
        ];

        $categoriesLevelThree = [
            [
                'parent_id' => 5,
                'title' => [
                    'en' => 'Juices',
                    'ru' => 'Соки'
                ],
            ],
        ];

        $languages = \App\Models\Language::pluck('id', 'code')->toArray();

       foreach ($categoriesLevelOne as $categoryOne) {
            $category = \App\Models\Category::create();

            foreach ($categoryOne['title'] as $code => $title) {
                $category->languages()->create([
                    'title' => $title,
                    'language_id' => $languages[$code],
                ]);
            }
        }

        foreach ($categoriesLevelTwo as $categoryTwo) {
            $category = \App\Models\Category::create([
                'parent_id' => $categoryTwo['parent_id'],
            ]);

            foreach ($categoryTwo['title'] as $code => $title) {
                $category->languages()->create([
                    'title' => $title,
                    'language_id' => $languages[$code],
                ]);
            }
        }

        foreach ($categoriesLevelThree as $categoryThree) {
            $category = \App\Models\Category::create([
                'parent_id' => $categoryThree['parent_id'],
            ]);

            foreach ($categoryThree['title'] as $code => $title) {
                $category->languages()->create([
                    'title' => $title,
                    'language_id' => $languages[$code],
                ]);
            }
       }


    }
}