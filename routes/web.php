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

/* -------------------- LOGIN ------------------------ */

Route::get('/login', function () {
    session(['loginid' => '']);
    session(['loginname' => '']);
    session(['loginbranchcode' => '']);
   return view('auth.login');

});

/* -------------------- LOGOUT ----------------------- */

Route::get('/logout', 'AuthController@logout');

/* ----------------- AUTHENTICATION ------------------ */

Route::post('/login', 'AuthController@login');

/* ------------------- HOME TASK --------------------- */

Route::get('/home', 'WorkbasketController@wblist');

/* ------------------ ADMIN TASK --------------------- */

Route::get('/homeADM', function () {
    return view('homeADM');
});

/* ------------------- ALL NOTICE -------------------- */

Route::post('/idno', 'NoticeTypeController@noticeType');

Route::get('/noticeinvalidity', function () {
    return view('noticeinvalidity.index');
});
Route::get('/noticedeath','MainController@index');
Route::get('/noticetype', 'NoticeTypeController@index');

Route::resource('noticeOd', 'CommonController@GetOBDetails');

Route::get('/noticeinvalidity','NoticeInvalidityController@index');
Route::get('/noticedeath','NoticeDeathController@index');
Route::get('/noticeod','NoticeOdController@index');

//Route::post('/obForm', 'CommonController@store');
//notice accident
Route::get('/noticeaccident','NoticeAccidentController@index');
Route::get('/branch/{statecode}', 'NoticeAccidentController@getbranchname');


//Route::get('/obForm','NoticeAccidentController@testgetindex');
Route::get('/obform', 'NoticeAccidentController@index');
//Route::post('/accidentdatetime', 'NoticeAccidentController@index');//irina comment out
Route::get('/accdatetime', 'NoticeAccidentController@AccidentDate');
Route::post('/accidentdatetime', 'NoticeAccidentController@checkAccidentDate');
Route::post('/obform', 'CommonController@postObForm');
Route::post('/remark', 'NoticeAccidentController@postRemark');

Route::post('/bankinformation','CommonController@postBankInfo');
Route::post('/certificateemployee','NoticeAccidentController@postCertificateEmployee');

//HANNIS
Route::post('/employerDetails', 'CommonController@postEmployer');
Route::post('/wagesdetails', 'NoticeAccidentController@postWages');

//najmi
Route::get('/indexobprofile', 'ObprofileController@index')->name('obprofile.index');
Route::get('/indexclaiminfo', 'ClaimController@index')->name('claim.index');
Route::post('insertlola', 'UploadobprofileController@upload')->name('obprofile.upload');
// Route::post('insert', 'UploadclaimController@upload')->name('claim.upload');

//irina
Route::post('/noticeaccident', 'NoticeAccidentController@postAccident');
Route::post('/updmc', 'NoticeAccidentController@UpdMC');
Route::post('/accsubmit', 'NoticeAccidentController@Submit');
Route::get('/success','CommonController@success');
Route::get('/viewdoc', 'UploadclaimController@viewstorage');


/* ------------------ UPLOAD FILE -------------------- */

Route::get('/fileupload','FileuploadController@index');
Route::get('/searchdocument', function () {
    return view('fileupload.index');
});

/* ---------------- LOCALIZATION -------------------- */

Route::get('locale', function () {
    return \App::getLocale();
});
Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});


// --------------- RTW Screen (AYU) ------------
//Route::get('/rtweligibilty', function()
//{
//    return view('Rtw_eligibility');
//
//});
  // Route::get('/PK.index','RtwformregController@index');
// Route::get('/noticetype', 'NoticeTypeController@index');
// Route::post('/idno', 'NoticeTypeController@noticeType');
// Route::get('/registrationrtw','RtwEligibilityController@index');
Route::get('/rtweligibilty', 'RtwEligibilityController@index');
Route::post('/idnortw', 'RtwEligibilityController@rtweligibility');
Route::get('/PK.index', 'RtwController@index');
// Route::get('/Testwebapp', function () {
//     return view('Testwebapp');
// });
/* ------------------- HOME TASK --------------------- */

 // Route::get('/homertw', 'WorkbasketRTWController@wblist');

// ------------------- UPLOAD SUPPORTING DOCUMENT RTW------------
Route::post('insert', 'UploadrtwController@upload')->name('claimAyu.upload');
Route::get('/viewdoc', 'UploadrtwController@viewstorage');
// Route::get('/PK.supportingDoc', 'UploadrtwController@index');

// ------------ CM RTW (IA)-----------------
// Route::get('/cmrtw.index', 'RtwController@index');

// -------------- WORKBASKET RTW ---------------

Route::get('/homertw', 'WorkbasketRTWController@index');
// Route::get('/preview', 'RtwController@index');

Route::post('/registrationrtw','RtwformregController@postConfirmationrtw');
Route::get('/cmrtw.index', 'RtwCaseController@index');
Route::post('/cmrtw.offer', 'RtwCaseController@offerC');
// Route::get('/cmrtw.offerconfirmation', 'RtwCaseController@index');

Route::get('/preview', 'previewController@preview')->name('preview');

Route::get('/cmrtw.obForm', 'previewController@claim');

Route::get('/Rtw_eligibility', function () {
    return view('Rtw_eligibility');
});
Route::get('/cmrtw.appointmentPlanning', function () {
    return view('cmrtw.appointmentPlanning');
});

Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

Route::post('/uploaddoc', 'UploadclaimController@upload')->name('claim.upload');
// Route::post('/PK.supportingDoc', 'UploadclaimController@upload')->name('claim.upload');

Route::get('/attendanceEndorsement', function () {
    return view('attendanceEndorsement');
});