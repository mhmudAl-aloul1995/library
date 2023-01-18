<?php
///php artisan krlove:generate:model Material --table-name=materials
Route::resource('/', 'Main\homeController');

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::resource('passport', 'passportController');

    /*********************************/

    Route::get('logout', 'loginController@logout');

    /*********************************/
    Route::resource('user', 'userController');

    Route::get('logout', 'loginController@logout');

    Route::get('vue', function () {
        return view('vue-app');
    });

    Route::get('customer-vue', function () {
        return view('customer-vue');
    });


});

/*********************************/

/*Route::get('/migrate', function () {
    ini_set('max_execution_time', 300);
    Artisan::call('migrate', []);
    sleep('10');
    Artisan::call('db:seed', []);
    php artisan krlove:generate:model Billing --table-name=billings

    return redirect('/');
});*/

Route::get('/migrate', function () {
    ini_set('max_execution_time', 300);
    Artisan::call('migrate:fresh --seed');

    Artisan::call('krlove:generate:model Customer --table-name=customers');


    return redirect('/');
});

Route::get('/seed', function () {
    ini_set('max_execution_time', 300);

    Artisan::call('db:seed', []);

    return redirect('/');
});

/*********************************/


Route::get('/reset', function () {
    ini_set('max_execution_time', 300);
    Artisan::call('migrate:reset', ['--force' => true]);
    echo "migration done.";
    return redirect('/');
});

/*********************************/


//Route::get('/', 'loginController@index')->name('login');
Route::post('login', 'loginController@login');




