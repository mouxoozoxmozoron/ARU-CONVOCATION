<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\users_controller;
use App\http\Controllers\announcement_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
   // return view('users/home');
//});

Route::get('/', [announcement_controller::class, 'home_controlck']);

Route::get('sign_out', function () {
   if(session()->has('user_id')){
    session()->pull('user_id');
    session()->pull('admin_is_online');
    return redirect('/');
   }
});


//u_view_users
//Route::view('users', 'users/u_view_users'); my_profile
Route::get('community_usetrs', [users_controller::class, 'users_community']);
Route::get('user_profile/{id}', [users_controller::class, 'users_profile']);
Route::get('my_profile', [users_controller::class, 'my_profile']);


//updation of profile  profile_updation   profile_data_check  id_update
Route::get('profile_updation/{id}', [users_controller::class, 'profile_update']);
Route::post('profile_data_check', [users_controller::class, 'profile_data_check'])->name('profile_data_check');

Route::get('sign_up', [users_controller::class, 'register']);
//Route::post('register_check', [users_controller::class, 'register_check']);
Route::post('register_check', [users_controller::class, 'register_check'])->name('register_check');

Route::get('sign_in', [users_controller::class, 'login']);


Route::view('announcement', 'admin/create_announce');
Route::get('a_home', [users_controller::class, 'a_user_list_count']);
//Route::view('a_users', 'admin/a_view_users'); 
Route::get('a_users', [users_controller::class, 'a_user_list']);

//admin action  create_event.blade
Route::get('Account_aprove/{id}', [users_controller::class, 'aprove_user']);
Route::get('Account_block/{id}', [users_controller::class, 'block_user']);
Route::get('Account_un_block/{id}', [users_controller::class, 'un_block_user']);
Route::get('Account_delete/{id}', [users_controller::class, 'delete_user']);
Route::get('create_announc', [announcement_controller::class, 'create_announcement']);
Route::post('announcement_check', [announcement_controller::class, 'announcement_check']);
Route::get('create_event', [announcement_controller::class, 'create_event']);
Route::post('event_check', [announcement_controller::class, 'event_check']);

Route::get('a_Announcement_list', [announcement_controller::class, 'a_Announcement_list']);
Route::get('a_Events_list', [announcement_controller::class, 'a_Events_list']);

Route::get('event_delete/{id}', [announcement_controller::class, 'event_delete']);
Route::get('event_publish/{id}', [announcement_controller::class, 'event_publish']);
Route::get('event_unpublish/{id}', [announcement_controller::class, 'event_un_publish']);
Route::get('event_update/{id}', [announcement_controller::class, 'event_update']);
Route::get('more_event/{id}', [announcement_controller::class, 'more_event']);


Route::get('announc_publish/{id}', [announcement_controller::class, 'announc_publish']);
Route::get('announc_unpublish/{id}', [announcement_controller::class, 'announc_un_publish']);
Route::get('annoumce_delete/{id}', [announcement_controller::class, 'announc_delete']);
Route::get('announc_update/{id}', [announcement_controller::class, 'announc_update']);

//action="{{ route('announc_update_check') }}"   register_check
Route::post('announc_update_checking', [announcement_controller::class, 'announc_update_check'])->name('announc_update_check');
//Route::post('announc_update_checking', [announcement_controller::class, 'announc_update_check']);
Route::post('event_update_check', [announcement_controller::class, 'event_update_check'])->name('event_update_check');


//more_event
//Route::get('event', function () {
   // return view('admin/create_event');
//});

//protecting login link  Account_delete
/*Route::get('login', function () {
    if(session()->has('user_id')){
     return redirect('/');
    }
    else{
        return view('login');
    }
 });*/

Route::post('login_check', [users_controller::class, 'login_check']);





Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
