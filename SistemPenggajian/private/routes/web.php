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

Route::get('/new', function () {
    return view('new.dashboard');
});

Route::get('/test', function () {
	return view('coba');
});

Route::get('/Beranda', function () {
	return view('pages.home');
});
Route::get('/Beranda', function () {
	return view('pages.about');
});
Route::get('belajar','BelajarController@index');
Route::get('karyawan','BelajarController@index');
// Route::get('/', function () {
//     return view('pages.index');
// });
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/halaman-kedua', function () {
//     return view('halamandua');
// });
// Route::get('/belajar', 'BelajarController@index');
// Route::get('/belajar/html', 'BelajarController@getPage');
Route::get('/data', function () {
	return view('pages.homedata');
});
Route::get('/data', function () {
	return view('pages.aboutdata');
});
Route::get('/data/login', function () {
	return view('login');
});
Route::get('/data/login/formlogin', function () {
	return view('formlogin');
});
Route::get('/formlogin', function () {
	return view('formlogin');
});
Route::get('/datapegawai', function () {
	return view('datapegawai');
});
Route::get('/data/daftarpegawai', function () {
	return view('create');
});
Route::get('/data/data', function () {
	return view('datapegawai');
});
Route::get('/widgets', 'PegawaiController@index');
Route::get('/pegawai/html', 'PegawaiController@getPage');


Route::get('/form', function () {
    return view('form.blade.php');
});

Route::get('/SIDK', function () {
    return view('layouts/layouts');
});
Route::get('/adminnn', function () {
    return view('layouts.dashboard');
});

Route::get('/adminn/tables', function () {
   return view('layouts.cruddk');
})->name('cruddk');

Route::get('/adminn/formK', function () {
    return view('layouts.formkaryawan');
})->name('formkaryawan');
Route::get('/adminn/formdp', function () {
    return view('layouts.formdatapres');
})->name('formdatapres');
Route::get('/adminn/formdu', function () {
    return view('layouts.formdatau');
})->name('formdatau');
Route::get('/adminn/cruddu', function () {
    return view('layouts.cruddu');
})->name('cruddu');
Route::get('/adminn/cruddp', function () {
    return view('layouts.cruddp');
})->name('cruddp');
Route::get('/adminn', function () {
    return view('layouts.dashboard2');
});

Route::get('/adm', function () {
    return view('admin.dashboard');
});
