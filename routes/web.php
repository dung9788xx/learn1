<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    $a=collect([['id'=>120,'max'=>1000],['id'=>130,'max'=>1500]]);
//    $remap=$a->keyBy('id');
//
//    $b=array(['id'=>120,'name'=>'ban1'],['id'=>1340,'name'=>'ban2']);
//    foreach ($b as &$c){
//      echo  $remap[$c['id']]['max'];
//    }
//    dd($b);
    echo "abc";
});
Route::get('/abc', function () {
    $sendmesage= new \App\Services\ChatWorkService();
});
