<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [ "uploads/products/1530926809product-3.png",
                    "uploads/products/1530926809product-3.png",
                    "uploads/products/1530926809product-3.png",
                    "uploads/products/1530926809product-3.png",
                    "uploads/products/1530926809product-3.png",
                    "uploads/products/1530926809product-3.png",
                    "uploads/products/1530926809product-3.png",
                    "uploads/products/1530926809product-4.png",
                    "uploads/products/1530926809product-4.png",
                    "uploads/products/1530926809product-4.png",
                    "uploads/products/1530926809product-4.png",
                    "uploads/products/1530926809product-4.png",
                    "uploads/products/1530926809product-4.png",
                    "uploads/products/1530926809product-4.png",
                    "uploads/products/1530926809product-5.png",
                    "uploads/products/1530926809product-5.png",
                    "uploads/products/1530926809product-5.png",
                    "uploads/products/1530926809product-5.png",
                    "uploads/products/1530926809product-5.png",
                    "uploads/products/1530926809product-5.png",
                    "uploads/products/1530926809product-5.png",
                    "uploads/products/1530926809product-6.png",
                    "uploads/products/1530926809product-6.png",
                    "uploads/products/1530926809product-6.png",
                    "uploads/products/1530926809product-6.png",
                    "uploads/products/1530926809product-6.png",
                    "uploads/products/1530926809product-6.png",
                    "uploads/products/1530926809product-6.png",
                    "uploads/products/1530927359product-2.png",
                    "uploads/products/1530927359product-2.png",
                    "uploads/products/1530927359product-2.png",
                    "uploads/products/1530927359product-2.png",
                    "uploads/products/1530927359product-2.png",
                    "uploads/products/1530927359product-2.png",
                    "uploads/products/1530927359product-2.png",
                    "uploads/products/1530932107product-1.png",
                    "uploads/products/1530932107product-1.png",
                    "uploads/products/1530932107product-1.png",
                    "uploads/products/1530932107product-1.png",
                    "uploads/products/1530932107product-1.png",
                    "uploads/products/1530932107product-1.png",
                    "uploads/products/1530932107product-1.png",
                    "uploads/products/1530926809product-3.png",
                    "uploads/products/1530926809product-4.png",
                    "uploads/products/1530926809product-3.png",
                    "uploads/products/1530926809product-4.png",
                    "uploads/products/1530926809product-5.png",
                    "uploads/products/1530926809product-5.png",
                    "uploads/products/1530926809product-6.png",
                    "uploads/products/1530927359product-2.png",
                    "uploads/products/1530932107product-1.png",
                   ];

        $name = [
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                    "DNOSSOSODF",
                ];

        for ($i=0; $i < 500 ; $i++) { 
            $rand_value = rand(1,500009221);
            $rand2 = rand(0,49);
            $price = rand(10000,1000000);
            $discount = ceil($price -((rand(5,95)/100) * $price));
            Product::create([
                'name' => $name[$rand2]."-".$rand_value,
                'category_id'=>rand(1,19),
                'slug'=> str_slug($name[$rand2]."-".$rand_value),
                'quantity'=>rand(30,500),
                'details'=>"Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla",
                'description'=>"Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla",
                'price'=> $price,
                'discounted_price'=>$discount,
                'product_image'=>$images[rand(1,50)],
                'sub_image_1'=>$images[rand(1,50)],
                'sub_image_2'=>$images[rand(1,50)],
                'sub_image_3'=>$images[rand(1,50)]
            ]);
        }
    }
}
