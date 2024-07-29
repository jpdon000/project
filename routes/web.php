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


    //To fetch data from table .............................!!
    Route::get('/final','UsersController@index')->name('users.index');

//itself To try fetch data from table .............................!!
    Route::get('/fi','ProjectController@index')->name('project.index');


    
// To insert form data into table and then fetch this data in the table...........!!

Route::get('/users','UsersController@index')->name('users.index');
Route::get('/users/create','UsersController@create')->name('users.create');
Route::POST('/users/store','UsersController@store')->name('users.store');

// How to delete and update data from table...............................................!!
Route::get('/users/delete/{id}','UsersController@delete')->name('users.delete');
Route::get('/users/edit/{id}','UsersController@edit')->name('users.edit');
Route::post('/users/update/{id}','UsersController@update')->name('users.update');
