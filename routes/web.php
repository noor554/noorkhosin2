<?php

use Illuminate\Support\Facades\Route;

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


   // route::get('/', function () {
 //       return view ('index');
  //  });

  //  route::get('/about', function () {
  //      $nama ='noor';
  //      return view ('about', ['nama' =>$nama] );
  //  });

route::get('/', 'PagesController@home');
route::get('/about', 'PagesController@about');

route::get('/mahasiswa', 'MahasiswaController@index');
route::get('/mahasiswa/{create}', 'MahasiswaController@create');
route::post('/mahasiswa', 'MahasiswaController@store');
route::get('/mahasiswa/students{student}', 'MahasiswaController@show');
// students
route::get('/students', 'StudentsController@index');
route::get('/students/{student}', 'StudentsController@show');
route::get('/students/{create}', 'StudentsController@create');
route::post('/students', 'StudentsController@store');