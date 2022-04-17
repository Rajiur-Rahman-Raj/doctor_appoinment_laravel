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
    return view('frontend.index');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'],function(){

    Route::middleware(['AdminMiddleware'])->group(function(){
        // admin
        Route::get('doctor/list/for/admin','BackendController@viewDoctorsList');
        Route::get('delete/doctor/{id}','BackendController@deleteDoctor');
        Route::get('patient/list','BackendController@viewPatientsList');
        Route::get('delete/patient/{id}','BackendController@deletePatient');

        // admin registration
        Route::get('/admin/register/page','BackendController@adminRegistrationPage');
        Route::post('/add/new/admin','BackendController@addNewAdmin');
        Route::get('/delete/admin/{id}','BackendController@deleteAdmin');

        // pdf
        Route::get('/doctor/list/pdf','BackendController@generateDoctorPDF');
        Route::get('/patient/list/pdf','BackendController@generatePatientPDF');

        // Appoinment View
        Route::get('recent/approved/appoinment/for/admin','BackendController@getRecentApprovedList');
        Route::get('delete/recent/approved/by/admin/{id}','BackendController@deleteRecentApproved');
        Route::get('pending/list/appoinment/for/admin','BackendController@pendingListAppoinment');
        Route::get('delete/pending/appoinments/by/admin/{id}','BackendController@deletePendingAppoinment');
        Route::get('previous/approved/appoinment/by/admin','BackendController@prevApprovedAppoinments');
        Route::get('delete/previous/appoinments/by/admin/{id}','BackendController@deletePrevApprovedAppoinments');
        Route::get('cancelled/appoinment/by/admin','BackendController@cancelledAppoinment');
        Route::get('delete/cancelled/appoinments/by/admin/{id}','BackendController@deleteCancelledAppoinment');
    });

    Route::middleware(['DoctorMiddleware'])->group(function(){
        // Doctors
        Route::get('my/doctor/profile','DoctorController@myProfilePage');
        Route::post('/update/doctor/info','DoctorController@updateDoctorInfo');
        Route::get('/recent/approved/appoinment/for/doctor','DoctorController@getRecentApprovedList');
        Route::get('/delete/recent/approved/by/doctor/{id}','DoctorController@deleteRecentApproved');
        Route::get('/pending/list/appoinment/for/doctor','DoctorController@pendingListAppoinment');
        Route::get('/approve/pending/appoinments/by/doctor/{id}','DoctorController@approvePendingAppoinment');
        Route::get('/cancel/pending/appoinments/by/doctor/{id}','DoctorController@cancelPendingAppoinment'); //new route
        Route::get('/previous/approved/appoinment/by/doctor','DoctorController@prevApprovedAppoinments');
        Route::get('/delete/previous/appoinments/by/doctor/{id}','DoctorController@deletePrevApprovedAppoinments');
        Route::get('/cancelled/appoinment/by/doctor','DoctorController@cancelledAppoinment');
        Route::get('/delete/cancelled/appoinments/by/doctor/{id}','DoctorController@deleteCancelledAppoinment');
    });

    Route::middleware(['PatientMiddleware'])->group(function(){
        // Patient
        Route::get('/my/user/profile','PatientController@myProfilePage');
        Route::post('/update/patient/info','PatientController@updatePatientInfo');
        Route::get('/recent/approved/appoinment','PatientController@getRecentApprovedList');
        Route::get('/delete/recent/approved/{id}','PatientController@deleteRecentApproved');
        Route::get('/print/recent/approved/{id}','PatientController@printRecentApproved'); //new route
        Route::get('/pending/list/appoinment','PatientController@pendingListAppoinment');
        Route::get('/delete/pending/appoinments/{id}','PatientController@deletePendingAppoinment');
        Route::get('/previous/approved/appoinment','PatientController@prevApprovedAppoinments');
        Route::get('/delete/previous/appoinments/{id}','PatientController@deletePrevApprovedAppoinments');
        Route::get('/cancelled/appoinment','PatientController@cancelledAppoinment');
        Route::get('/delete/cancelled/appoinments/{id}','PatientController@deleteCancelledAppoinment');

        // Appoinment
        Route::get('/take/doctor/appoinment','AppoinmentController@viewAppoinmentPage');
        Route::get('/findDoctorWithDepartment/{id}','AppoinmentController@findDoctorWithDepartment');
        Route::get('/findDateWithDoctor/{id}','AppoinmentController@findDateWithDoctor');
        Route::get('/findtimeWithDoctor/{id}','AppoinmentController@findTimeWithDoctor');
        Route::post('/book/appoinment','AppoinmentController@bookAppoinment');
    });

});

Route::get('/department/list','FrontendController@viewDepartments');
Route::get('/doctor/list','FrontendController@viewAllDoctor');
Route::get('/doctor/by/deparmtent/{id}','FrontendController@doctorByDepartment');


