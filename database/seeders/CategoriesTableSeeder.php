<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
			'Spodnie',
			'Kurtki',
			'Skarpetki',
			'Buty',
			'Bluzy',
			'Czapki'
		);
		foreach($categories as $category)
		Category::create([
			'name' => $category
		]);
    }
}
