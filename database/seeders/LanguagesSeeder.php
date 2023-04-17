<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    public function run(): void
    {
        $codes = [
            'en',
            'ru',
        ];

        foreach ($codes as $code) {
            Language::updateOrCreate([
                'code' => $code,
            ]);
        }
    }
}
