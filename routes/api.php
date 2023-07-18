<?php

use App\Http\Controllers\api\ElementsController;
use App\Http\Controllers\api\EstateController;
use App\Http\Controllers\api\SearchController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PhoneController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Chat\ConversationController;
use App\Http\Controllers\user\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Auth Route
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::post('forget_password', 'forget_password');
    Route::post('reset_Password', 'reset_Password');
});

Route::group(['middleware' => 'IsVerifyEmail'], function () {
    //Profile User Route
    Route::get('user/profile', [UserController::class, 'index']);
    Route::post('user/changeEmail', [UserController::class, 'changeEmail']);
    Route::post('user/addPhone', [UserController::class, 'addPhone']);
    Route::post('user/changePassword', [UserController::class, 'changePassword']);

    //Chat Message
    Route::post('sendMessage', [ConversationController::class, 'sendMessage']);
    Route::post('reseveMessage', [ConversationController::class, 'reseveMessage']);
    Route::post('composeMessage', [ConversationController::class, 'composeMessage']);

    //Elements Route
    Route::get('Elements_show', [ElementsController::class, 'index']);
    Route::post('Elements_store', [ElementsController::class, 'store']);

    Route::apiResource('Estate', EstateController::class);

    // Route::get('Estate'               , [EstateController::class   , 'index']);
    // Route::get('Estate/{id}'          , [EstateController::class   , 'show']);
    // Route::delete('Estate/{id}'       , [EstateController::class   , 'destroy']);
    // Route::post('Estate'              , [EstateController::class   , 'store']);
    Route::get('elements', [ElementsController::class, 'store']);

    //phone verification
    Route::get('send_phone_verfication', [PhoneController::class, 'send_phone_verfication']);
    Route::post('verify_Phone', [PhoneController::class, 'verify_Phone']);
});

// Verify email
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');
// Resend link to verify email
Route::post('/email/verify/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return response('message Verification link sent!');
})->middleware(['auth:api', 'throttle:6,1'])->name('verification.send');
//hi message
Route::get('verify_email', function () {
    return 'you must be verifiy your Email';
});

Route::get('Elements', [SearchController::class, 'Elements']);
Route::get('Element_Sub/{id}', [SearchController::class, 'Element_Sub']);
Route::get('Element_Sub_det/{id}', [SearchController::class, 'Element_Sub_det']);
Route::get('Element_Sub_det_type/{id}', [SearchController::class, 'Element_Sub_det_type']);
Route::get('ElementProperty', [SearchController::class, 'EstateProperty']);
Route::get('ElementPropertyOptions/{id}', [SearchController::class, 'EstatePropertyOptions']);
Route::get('Esta', [SearchController::class, 'Esta']);

Route::get('/helper', function () {
    return 'sss';
})->middleware('auth:api');
