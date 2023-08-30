<?php

namespace Database\Seeders;

use App\Models\ZakatCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZakatCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZakatCategories::create(
            ['id' => 1, 'categories' => 'Zakat Fitrah'],
        );
        ZakatCategories::create(
            ['id' => 2, 'categories' => 'Zakat Maal'],
        );
    }
}
