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

//Route::get('/users', function () {
 //   return view('users');
//});
Route::get('/listUsers',[
'uses'=>'listPersonCtrl@show',
'as'=>'listPerson.show']);

Route::get('account/{id}', [
        'uses' => 'listPersonCtrl@account',
        'as'   => 'account'])->middleware('auth');
		
		
Route::get('/showedit/{id}',[
'uses'=>'personEditCtrl@showEdit',
'as'=>'showEdit'])->middleware('auth');

Route::get('addFriend/{id}', [
        'uses' => 'friendCtrl@addFriend',
        'as'   => 'addFriend']);
		
Route::get('deleteFriend/{id}', [
        'uses' => 'friendCtrl@deleteFriend',
        'as'   => 'delFriend']);

Route::post('/edit/{id}',[
'uses'=>'personEditCtrl@edit',
'as'=>'personEdit'])->middleware('auth');

Route::post('/addPost/{id}',[
'uses'=>'listPersonCtrl@addPost',
'as'=>'addPost'])->middleware('auth');


Route::view('/homePage', 'welcome');

Route::post('/search', [
'uses' => 'listPersonCtrl@search',
        'as'   => 'search']);
		
		
Route::post('/searchFriend/{id}', [
'uses' => 'listPersonCtrl@searchFriend',
        'as'   => 'searchFriend']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat/{id}',[
'uses'=>'postsCtrl@chatShow',
'as'=>'chatShow']);

Route::post('/sendMsg/{id}',[
'uses'=>'postsCtrl@sendmsg',
'as'=>'sendMsg']);


Route::post('/sendpost/{id}',[
'uses'=>'postsCtrl@sendpost',
'as'=>'sendpost']);

Route::get('/chatting/{id}',[
'uses'=>'postsCtrl@chatting',
'as'=>'chatting']);

Route::get('/showFriends/{id}',[
'uses'=>'friendCtrl@friendList',
'as'=>'showFriends']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
