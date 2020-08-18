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
    $a=\App\User::find(38);
        return dd($a->rooms->toArray());
});
Route::get('/abc', function () {
//    for($i=0;$i<5;$i++){
//        \App\Jobs\SendMailJob::dispatch($i);
//    }
//    $second=1596503968;
    $now=1596504193;
    echo \Carbon\Carbon::now()->toDateTimeString();
  //  echo date("d/m/Y H:i:s", $now);
});
