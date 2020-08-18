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
//         $this->call(UserCollectionSeeder::class);
    }
}
