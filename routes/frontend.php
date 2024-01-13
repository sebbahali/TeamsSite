<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\TeamController;
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

Route::group(['middleware' => 'auth:team'], function () {
   // Route::get('/', [FrontendController::class, 'index'])->name('index');

    // teams info Route
    Route::group(['prefix' => 'info'], function () {
        Route::get('/show', [TeamController::class, 'show'])->name('teams.show');
        Route::get('/edit', [TeamController::class, 'edit'])->name('teams.edit');
        Route::patch('/update', [TeamController::class, 'update'])->name('teams.update');
        Route::patch('/change-logo', [TeamController::class, 'changeLogo'])->name('teams.change-logo');
        Route::get('/edit-password', [TeamController::class, 'editPassword'])
            ->middleware('password.confirm:frontend.password.confirm')
            ->name('teams.edit-password');
        Route::patch('/save-password', [TeamController::class, 'savePassword'])->name('teams.save-password');

        Route::post('upload-header-image', [TeamController::class, 'uploadHeaderImage'])
            ->name('teams.upload-header-image');

        Route::delete('delete-header-image/{image}', [TeamController::class, 'deleteHeaderImage'])
            ->name('teams.delete-header-image');

        Route::post('/save-token', [TeamController::class, 'saveToken'])->name('teams.save-token');
    });

    // players controller
    Route::controller(PlayerController::class)
        ->prefix('players')
        ->as('players.')
        ->group(function () {
            Route::get('/pdf', 'pdf')->name('pdf');
            Route::get('/send-to-club/{player:card_id}', 'sendToClub')->name('send-to-club');
            Route::get('request-index', 'requestIndex')->name('request-index');
            Route::get('/checkout-register/{player}', 'checkoutRegister')->name('checkout');
        });
    Route::resource('players', PlayerController::class);

    Route::controller(PaymentController::class)
        ->prefix('payments')
        ->as('payments.')
        ->group(function () {
            Route::get('success/{type}/{id}/{transaction_id}', 'success')->name('success');
            Route::get('cancel', 'cancel')->name('cancel');
        });

    Route::resource('notefications', NoteficationController::class);
    Route::resource('message-notefications', MessageNoteficationController::class);

    Route::resource('team-messages', TeamMessageController::class);
    Route::resource('club-team-messages', ClubTeamMessageController::class);

    // loan player routes
    Route::controller(LoanPlayerController::class)
        ->prefix('loan-players')
        ->as('loan-players.')
        ->group(function () {
            Route::get('create/{player}', 'create')->name('create');
            Route::post('store/{player}', 'store')->name('store');
            Route::post('basic-approve/{loan}', 'basicApprove')->name('basic-approve');
            Route::post('basic-cancel/{loan}', 'basicCancel')->name('basic-cancel');
            Route::get('/checkout-loan/{loan}', 'checkoutLoan')->name('checkout');
        });
    Route::resource('loan-players', LoanPlayerController::class)->except(['create', 'store']);

    // loan player routes
    Route::controller(TransferPlayerController::class)
        ->prefix('transfer-players')
        ->as('transfer-players.')
        ->group(function () {
            Route::get('create/{player}', 'create')->name('create');
            Route::post('store/{player}', 'store')->name('store');
            Route::post('basic-approve/{transfer}', 'basicApprove')->name('basic-approve');
            Route::post('basic-cancel/{transfer}', 'basicCancel')->name('basic-cancel');
            Route::get('/checkout-loan/{transfer}', 'checkoutTransfer')->name('checkout');
        });
    Route::resource('transfer-players', TransferPlayerController::class)->except(['create', 'store']);

    Route::controller(YearUpdateController::class)
        ->prefix('year-updates')
        ->as('year-updates.')
        ->group(function () {
            Route::get('show', 'show')->name('show');
            Route::get('cancel-player/{player}', 'cancelPlayer')->name('cancel-player');
            Route::get('/checkout-year-update/{yearUpdate}', 'checkout')->name('checkout');
        });

    Route::resource('team-manges', TeamMangeController::class);

    Route::controller(TeamMangeMemberController::class)
        ->prefix('team-mange-members')
        ->as('team-mange-members.')
        ->group(function () {
            Route::get('{teamMange}/create', 'create')->name('create');
            Route::post('{teamMange}/store', 'store')->name('store');
            Route::get('{member}/edit', 'edit')->name('edit');
            Route::patch('{member}', 'update')->name('update');
            Route::delete('{member}', 'destroy')->name('destroy');
        });

    Route::controller(CompetitionController::class)
        ->prefix('competitions')
        ->as('competitions.')
        ->group(function () {
            Route::patch('subscripe/{competition}/', 'Subscripe')->name('subscripe');
            Route::patch('un-subscripe/{competition}', 'unSubscripe')->name('un-subscripe');
            Route::get('setup/{competition}', 'setup')->name('setup');
        });
    Route::resource('competitions', CompetitionController::class);

    Route::controller(CompetitionIssueController::class)
        ->prefix('competition/{competition}/competition-issues')
        ->as('competition-issues.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/messages', 'messageIndex')->name('message-index');
            Route::get('create', 'create')->name('create');
            Route::get('/messages/create', 'messageCreate')->name('message-create');
            Route::get('{competitionIssue}', 'show')->name('show');
        });

    Route::controller(CompetitionMatchController::class)
        ->prefix('competition/{competition}/competition-matches')
        ->as('competition-matches.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('show/{match}', 'show')->name('show');
            Route::get('pdf/{match}', 'pdf')->name('pdf');
        });

    Route::controller(MatchPlayerController::class)
        ->prefix('competition-match/{match}/players')
        ->as('match-players.')
        ->group(function () {
            Route::get('create', 'create')->name('create');
            Route::delete('{player}', 'destroy')->name('destroy');
        });

    Route::controller(MatchAssistantController::class)
        ->prefix('competition-match/{match}/assistants')
        ->as('match-assistants.')
        ->group(function () {
            Route::get('create', 'create')->name('create');
            Route::delete('{assistant}', 'destroy')->name('destroy');
        });

    Route::controller(CompetitionTeamController::class)
        ->prefix('competition-teams')
        ->as('competition-teams.')
        ->group(function () {
            Route::get('{competitionTeam}/{assistant}/delete-member', 'deleteMember')->name('delete-member');
            Route::get('{competitionTeam}/{player}/delete-player', 'deletePlayer')->name('delete-player');
            Route::get('{competitionTeam}/{player}/delete-loan-in-player', 'deleteLoanInPlayer')
                ->name('delete-loan-in-player');
            Route::get('{competitionTeam}/{player}/delete-loan-out-player', 'deleteLoanOutPlayer')
                ->name('delete-loan-out-player');
            Route::get('{competitionTeam}/register', 'register')->name('register');
            Route::get('{competitionTeam}/checkout', 'checkout')->name('checkout');
            Route::get('{competitionTeam}/pdf', 'pdf')->name('pdf');
        });

    Route::resource('assistants', AssistantController::class);

    Route::controller(OutLoanPlayerController::class)
        ->prefix('out-loan-players')
        ->as('out-loan-players.')
        ->group(function () {
            Route::get('send-to-club/{outLoanPlayer}', 'sendToClub')->name('send-to-club');
            Route::get('/checkout/{loan}', 'checkout')->name('checkout');
        });
    Route::resource('out-loan-players', OutLoanPlayerController::class);
});

require __DIR__ . '/auth/frontend.php';
