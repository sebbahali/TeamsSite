<?php

use App\Http\Controllers\API\Auth\ForgotPasswordController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\ResetPasswordController;
use App\Http\Controllers\API\ClubController;
use App\Http\Controllers\API\ClubManagementController;
use App\Http\Controllers\API\GeneralController;
use App\Http\Controllers\API\NotificationController;
use App\Http\Controllers\API\PlayerController;
use App\Http\Controllers\API\TeamController;
use App\Http\Controllers\API\TeamManagementController;
use App\Http\Controllers\API\TeamManagementMemberController;
use App\Http\Controllers\API\TechnicalTeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::controller(LoginController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->middleware('auth:api-team');
});

Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('activation/resend', 'resendActivation');
    Route::post('activate', 'activate');
});
Route::controller(ResetPasswordController::class)->prefix('password')->group(function () {
    Route::get('/reset/{token}/{hash}', 'showResetForm')->middleware('guest:api-team');
    Route::post('/reset', 'reset')->middleware('guest:api-team');
    Route::patch('/', 'updatePassword')->middleware('auth:api-team');
});
// forget password
Route::group(['prefix' => 'password'], function () {
    Route::post('/forget', [ForgotPasswordController::class, 'sendResetLinkEmail'])->middleware('guest:api-team');
});


Route::controller(GeneralController::class)->group(function () {
    Route::get('/our-message', 'ourMessage');
    Route::get('/our-philosophy', 'ourPhilosophy');
    Route::get('/our-vision', 'ourVision');
    Route::get('/users', 'users');
    Route::get('/teams', 'teams');
    Route::get('/functional-roles', 'functionalRoles');
    Route::get('/technical-roles', 'technicalRoles');
});

// auth route goes here
Route::group(['middleware' => ['auth:api-team']], function () {

    Route::controller(TeamController::class)->prefix('team')->group(function () {
        Route::get('/', 'index');
        Route::get('/own', 'own');
        Route::post('/update', 'update');
        Route::get('/other', 'other');
        Route::get('/transfer-requests', 'transferRequests');
        Route::get('/transfer-requests/show', 'showTransferRequests');
        Route::get('/loan-requests', 'loanRequests');
        Route::get('/loan-requests/show', 'showLoanRequests');
        Route::get('/messages', 'messages');
        Route::patch('/messages', 'updateMessages');
        Route::post('/messages', 'storeMessages');
        Route::post('/messages/reply', 'replyMessage');

    });
    Route::controller(ClubController::class)->prefix('club')->group(function () {
        Route::get('/messages', 'messages');
        Route::patch('/messages', 'updateMessages');
        Route::post('/messages', 'storeMessages');
        Route::post('/messages/reply', 'replyMessage');
    });
    Route::controller(PlayerController::class)->prefix('player')->group(function () {
        Route::get('/', 'index');
        Route::get('/show', 'show');
        Route::get('/registration-requests', 'registrationRequests');
        Route::get('/associate', 'associate');
        Route::get('/out-loan', 'indexOutLoan');
        Route::get('/out-loan/show', 'showOutLoan');
        Route::post('/store', 'store');
        Route::post('/out-loan-store', 'storeOutLoan');
    });
    Route::controller(TechnicalTeamController::class)->prefix('technical-team')->group(function () {
        Route::get('/', 'index');
        Route::post('/store', 'store');
        Route::patch('/update', 'update');
        Route::delete('/{assistant}', 'destroy');
    });
    Route::controller(TeamManagementController::class)->prefix('team-management')->group(function () {
        Route::get('/', 'index');
        Route::post('/store', 'store');
        Route::controller(TeamManagementMemberController::class)->prefix('member')->group(function () {
            Route::post('/store', 'store');
            Route::post('/update', 'update');
            Route::get('/', 'index');
            Route::delete('/{member}', 'destroy');

        });

    });

    Route::controller(NotificationController::class)->prefix('notifications')->group(function () {
        Route::get('/', 'index');
        Route::patch('/', 'update');

    });
});
