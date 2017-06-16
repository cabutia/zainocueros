<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
          "Cueros",
          "Calzado",
          "Alfombras",
          "Sillas",
          "Linea niños",
          "Otros"
        ];
        foreach ($categories as $cat) {
          Category::create(["name" => $cat]);
        }
    }
}
