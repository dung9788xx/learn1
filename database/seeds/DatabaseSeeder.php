<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\ProductCategory::create(['name'=>'Quần áo nam','priority'=>1]);
        \App\ProductCategory::create(['name'=>'Quần áo nữ','priority'=>2]);
        \App\ProductCategory::create(['name'=>'Giày nam','priority'=>3]);
        \App\ProductCategory::create(['name'=>'Giày nữ','priority'=>4]);
        \App\Product::create(['name'=>'Áo sơ mi nam cao cấp','category_id'=>1,'description'=>'Bao hành 1 đổi 1 12 tháng','price'=>20000]);
        \App\Product::create(['name'=>'Quần kaki nam','category_id'=>1,'description'=>'Quần đẹp thoáng mát','price'=>30000]);
        \App\Product::create(['name'=>'Áo hai dây nữ cao câp','category_id'=>2,'description'=>'Chât liệu đep','price'=>120000]);
        \App\Product::create(['name'=>'Áo ngủ','category_id'=>2,'description'=>'Bao hành 1 đổi 1 12 tháng','price'=>23000]);
//         $this->call(UserCollectionSeeder::class);
    }
}
