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

Route::get('/', function () {
      return view('page.Pagelog');
});
Route::get('index', [
      'as' => 'trang-chu',
      'uses' => 'App\Http\Controllers\PController@getIndex'
]);
Route::get('userManagement',[
      'as'=> 'userManagement', 
      'uses' => 'App\Http\Controllers\PController@getuserManagement'
]);
Route::get('productManagement',[
      'as'=> 'productManagement', 
      'uses' => 'App\Http\Controllers\PController@getproductManagement'
]);
Route::get('admin',[
      'as'=> 'admin', 
      'uses' => 'App\Http\Controllers\PController@getadmin'
]);
Route::get('page-log', [
      'as' => 'pagelog',
      'uses' => 'App\Http\Controllers\PController@getPL'
]);
Route::get('dang-nhap', [
      'as' => 'login',
      'uses' => 'App\Http\Controllers\PController@getLogin'
]);
Route::post('dang-nhap', [
      'as' => 'login',
      'uses' => 'App\Http\Controllers\PController@postLogin'
]);
Route::get('dang-ky', [
      'as' => 'sigup',
      'uses' => 'App\Http\Controllers\PController@getSigup'
]);
Route::post('dang-ky', [
      'as' => 'sigup',
      'uses' => 'App\Http\Controllers\PController@postSigup'
]);
Route::get('dang-xuat', [
      'as' => 'logout',
      'uses' => 'App\Http\Controllers\PController@getlogout'
]);
Route::get('loai-san-pham/{type}', [
      'as' => 'loaisanpham',
      'uses' => 'App\Http\Controllers\PController@getLoaiSP'
]);
Route::get('search', [
      'as' => 'search',
      'uses' => 'App\Http\Controllers\PController@getsearch'
]);
Route::get('add-cart/{id}', [
      'as' => 'giohang',
      'uses' => 'App\Http\Controllers\PController@getaddcart'
]);
Route::get('delete-cart/{id}', [
      'as' => 'xoagiohang',
      'uses' => 'App\Http\Controllers\PController@getdeletecart'
]);
Route::get('add-user', [
      'as' => 'adduser',
      'uses' => 'App\Http\Controllers\PController@getadduser'
]);
Route::post('add-user', [
      'as' => 'adduser',
      'uses' => 'App\Http\Controllers\PController@postadduser'
]);
Route::get('updateUser/{id}',[
      'as'=> 'updateUser',
      'uses' => 'App\Http\Controllers\PController@getupdateUser'
]);
Route::post('updateUser',[
      'as'=> 'postupdateUser',
      'uses' => 'App\Http\Controllers\PController@postupdateUser'
]);
Route::get('deleteUser/{id}',[
      'as'=> 'deleteUser',
      'uses' => 'App\Http\Controllers\PController@DeleteUser'
]);
Route::get('add-product', [
      'as' => 'addproduct',
      'uses' => 'App\Http\Controllers\PController@getaddproduct'
]);
Route::post('add-product', [
      'as' => 'addproduct',
      'uses' => 'App\Http\Controllers\PController@postaddproduct'
]);
Route::get('updateproduct/{id}',[
      'as'=> 'updateproduct',
      'uses' => 'App\Http\Controllers\PController@getupdateproduct'
]);
Route::post('updateproduct',[
      'as'=> 'postupdateproduct',
      'uses' => 'App\Http\Controllers\PController@postupdateProduct'
]);
Route::get('deleteProduct/{id}',[
      'as'=> 'deleteProduct',
      'uses' => 'App\Http\Controllers\PController@getdeleteProduct'
]);
Route::get('dat-hang',[
      'as'=>'getdathang',
      'uses'=>'App\Http\Controllers\PController@getdathang'
]);
Route::post('dat-hang',[
      'as'=>'postdathang',
      'uses'=>'App\Http\Controllers\PController@postdathang'
]);
//=======don hang======
Route::get('managementOder',[
      'as'=> 'managementOder', 
      'uses' => 'App\Http\Controllers\PController@getmanagementOder'
]);
Route::get('add-order', [
      'as' => 'getaddOrder',
      'uses' => 'App\Http\Controllers\PController@getaddOrder'
]);
Route::post('add-Order', [
      'as' => 'postaddOrder',
      'uses' => 'App\Http\Controllers\PController@postaddOrder'
]);
Route::get('updateOrder/{id}',[
      'as'=> 'updateOrder',
      'uses' => 'App\Http\Controllers\PController@getupdateOrder'
]);
Route::post('updateOrder',[
      'as'=> 'postupdateOrder',
      'uses' => 'App\Http\Controllers\PController@postupdateOrder'
]);
Route::get('deleteOrder/{id}',[
      'as'=> 'deleteOrder',
      'uses' => 'App\Http\Controllers\PController@getdeleteOrder'
]);
Route::get('changeStateOrder/{id}',[
      'as'=> 'changeStateOrder',
      'uses' => 'App\Http\Controllers\PController@getchangeStateOrder'
]);
Route::get('profile',[
      'as'=> 'profile',
      'uses' => 'App\Http\Controllers\PController@getprofile'
]);
Route::get('aboutus',[
      'as'=> 'aboutus',
      'uses' => 'App\Http\Controllers\PController@getaboutus'
]);
Route::get('contacs',[
      'as'=> 'contacs',
      'uses' => 'App\Http\Controllers\PController@getcontacs'
]);

