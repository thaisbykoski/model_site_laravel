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

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@logout']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@enter']);




Route::get('/contato', ['as'=>'contact.index','uses'=>'ContactController@index']);

Route::get('/admin/cursos/detail/{id?}',['as'=>'admin.cursos.detail','uses'=>'Admin\CourseController@detail']);

Route::group(['middleware'=>'auth'],function(){
  
  Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CourseController@index']);
  Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CourseController@add']);
  Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CourseController@save']);
  Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CourseController@edit']);
  Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CourseController@update']);
  Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CourseController@delete']);

});

