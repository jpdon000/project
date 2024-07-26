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
    return view('welcome');
});


// Through url()..............................................!!
Route::get('/Ram', function(){
    echo"Hell Ram how are you Through URL";
});

Route::get('/Shyam', function(){
    echo"Hell shyam Through  URL";
});

Route::get('/Hari', function(){
    echo"Hell Hari Through  URL";
});
// 
Route::get('/Jp', function(){
    echo"Hell jp Through  URL";
});

Route::get('/Krishna', function(){
    echo"Hell krishna  how are you Through  URL";
});


//Through route() .....................................................!!

Route::get('/man',function(){
echo"Hello Ram how are you through Route1_!";
})->name('route1');


Route::get('/krishna',function(){
    echo"Hello shyam how are you through Route2_!";
    })->name('route2');





// call to table......................................!!

    Route::get('/jp','JpController@index')->name('table5');

    
    Route::get('/table','tablecontroller@table1')->name('table');
