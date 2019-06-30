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
//    return view('auth.login');
    return view('welcome');
});

/*Auth Routes*/
Auth::routes();
Route::get('/password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('email_password');
Route::get('/reset/email', 'Auth\ResetPasswordController@showResetForm')->name('reset_password');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function()
{

    /* Home Routes */
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    /*Inbox*/
    Route::get('/write-sms', 'InboxController@show_write_sms_form')->name('write-sms');
    Route::get('/inbox', 'InboxController@show_message_list')->name('list-sms');
    Route::get('/send-sms', 'InboxController@send-sms')->name('send-sms');

    /*Phonebook*/
    Route::get('/new-contact', 'PhonebookController@show_create_new_contact_form')->name('new-contact');
    Route::get('/contacts', 'PhonebookController@list_contacts')->name('contacts');

    /*Groups*/
    Route::get('/groups', 'HomeController@index')->name('groups');

    /*SMS Templates*/
    Route::get('/templates', 'HomeController@index')->name('templates');

    /*SMS Schedules*/
    Route::get('/new-schedule', 'SchedulesController@show_create_new_schedule_form')->name('new-schedule');
    Route::get('/schedules', 'SchedulesController@list_schedules')->name('schedules');

    /*Sending status*/
    Route::get('/reports', 'ReportsController@show_reports_page')->name('reports');
    Route::get('/get-reports', 'ReportsController@get_reports_data')->name('reports_data');

    /*App settings*/
    Route::get('/settings', 'SettingsController@show_personal_settings')->name('settings');
    Route::get('/settings/personal', 'SettingsController@show_personal_settings')->name('settings.personal');
    Route::get('/settings/sms', 'SettingsController@show_sms_settings')->name('settings.sms');
});

Route::get('/users', 'UsersController@getUsers');
Route::delete('/users/{user}/delete', 'UsersController@deleteUser');