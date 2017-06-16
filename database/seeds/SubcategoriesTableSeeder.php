<?php

use App\Subcategory;
use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $subcategories = [
        ['name' => 'Cuero de vaca', 'category_id' => 0],
        ['name' => 'Cuero de oveja', 'category_id' => 0],
        ['name' => 'Cuero de lanar', 'category_id' => 0],
        ['name' => 'Pantubotas bajas', 'category_id' => 1],
        ['name' => 'Pantubotas altas', 'category_id' => 1],
        ['name' => 'Patchwork', 'category_id' => 2],
        ['name' => 'Vaca', 'category_id' => 2],
        ['name' => 'Lanar', 'category_id' => 2],
        ['name' => 'Diseño', 'category_id' => 2],
        ['name' => 'Almohadones', 'category_id' => 3],
        ['name' => 'Decoracion de interiores', 'category_id' => 3],
        ['name' => 'Acolchados', 'category_id' => 3],
        ['name' => 'Cubos', 'category_id' => 4],
        ['name' => 'Materos', 'category_id' => 4],
        ['name' => 'Banquitos', 'category_id' => 4],
        ['name' => 'Silla directorio', 'category_id' => 4],
        ['name' => 'BKF', 'category_id' => 4],
        ['name' => 'Personalizados', 'category_id' => 5]
      ];
      foreach ($subcategories as $subcat) {
        Subcategory::create([
          "name" => $subcat['name'],
          "category_id" => $subcat['category_id']
        ]);
      }
    }
}
