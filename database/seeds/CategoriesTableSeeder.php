<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Sofa',
            'slug'=>str_slug('Sofa'),
            'icon'=>'f-icon-sofa',
            'image'=>'uploads/products/1530927359product-2.png'
            ]);
        Category::create([
            'name'=>'Armchairs',
            'icon'=>'f-icon-armchair',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Armchairs')
            ]);
        Category::create([
            'name'=>'Chairs',
            'icon'=>'f-icon-chair',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Chairs')
            ]);
        Category::create([
            'name'=>'Dinning Table',
            'icon'=>'f-icon-dining-table',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Dinning Table')
            ]);
        Category::create([
            'name'=>'Media Storage',
            'icon'=>'f-icon-media-cabinet',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Media Storage')
            ]);
        Category::create([
            'name'=>'Tables',
            'icon'=>'f-icon-table',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Tables')
            ]);
        Category::create([
            'name'=>'Bookcase',
            'icon'=>'f-icon-bookcase',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Bookcase')
            ]);
        Category::create([
            'name'=>'Bedroom',
            'icon'=>'f-icon-bedroom',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Bedroom')
            ]);
        Category::create([
            'name'=>'Nightstand',
            'icon'=>'f-icon-nightstand',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Nightstand')
            ]);
        Category::create([
            'name'=>'Children Room',
            'icon'=>'f-icon-children-room',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Children Room')
            ]);
        Category::create([
            'name'=>'Kitchen',
            'icon'=>'f-icon-kitchen',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Kitchen')
            ]);
        Category::create([
            'name'=>'Bathroom',
            'icon'=>'f-icon-bathroom',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Bathroom')
            ]);
        Category::create([
            'name'=>'Wardrobe',
            'icon'=>'f-icon-wardrobe',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Wardrobe')
            ]);
        Category::create([
            'name'=>'Shoe Cabinet',
            'icon'=>'f-icon-shoe-cabinet',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Shoe Cabinet')
            ]);
        Category::create([
            'name'=>'Office',
            'icon'=>'f-icon-office',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Office')
            ]);
        Category::create([
            'name'=>'Bar Sets',
            'icon'=>'f-icon-bar-set',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Bar Sets')
            ]);
        Category::create([
            'name'=>'Lightning',
            'icon'=>'f-icon-lightning',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Lightning')
            ]);
        Category::create([
            'name'=>'Carpet',
            'icon'=>'f-icon-carpet',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Varpet')
            ]);
        Category::create([
            'name'=>'Accessories',
            'icon'=>'f-icon-accessories',
            'image'=>'uploads/products/1530927359product-2.png',
            'slug'=>str_slug('Accessories')
            ]);
    }
}
