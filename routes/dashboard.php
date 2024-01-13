<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\TeamController;

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

Route::middleware(['web'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    /* Team Routes */
    Route::controller(TeamController::class)
        ->prefix('teams')
        ->as('teams.')
        ->group(function () {
            Route::patch('{team}/change-logo', 'changeLogo')->name('change-logo');
            Route::get('{team}/edit-password', 'editPassword')
//                ->middleware('password.confirm:dashboard.password.confirm')
                ->name('edit-password');
            Route::patch('{team}/save-password', 'savePassword')->name('save-password');
            Route::get('{team}/assistant/{assistant}', 'showAssistant')->name('show-assistant');
        });
    Route::resource('teams', TeamController::class);

    Route::controller(PlayerSearchController::class)
        ->prefix('players-search')
        ->as('players-search.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
        });
    Route::controller(ClubController::class)
        ->prefix('clubs')
        ->as('clubs.')
        ->group(function () {
            Route::patch('change-logo', 'changeLogo')->name('change-logo');
        });
    Route::resource('clubs', ClubController::class)->only('show', 'edit', 'update');

    Route::resource('players', PlayerController::class)->except('index', 'show');
    /* Player Routes */
    Route::controller(PlayerController::class)
        ->prefix('players')
        ->as('players.')
        ->group(function () {
            Route::get('/{team}', 'index')->name('index');
            Route::get('/{team}/pdf', 'pdf')->name('pdf');
            Route::get('/show/{player}', 'show')->name('show');
            Route::get('/first-approve/{player}/{status}', 'firstApprove')->name('first-approve');
            Route::get('/affiliate/{player}', 'affiliate')->name('affiliate');
            Route::get('request/index', 'requestIndex')->name('request-index');
            Route::get('/arrest/{player}', 'arrest')->name('arrest');
            Route::get('/affiliation/{player}', 'affiliation')->name('affiliation');
        });


    Route::resource('notefications', NoteficationController::class);
    Route::resource('message-notefications', MessageNoteficationController::class);

    Route::controller(ClubTeamMessageController::class)
        ->prefix('club-team-messages')
        ->as('club-team-messages.')
        ->group(function () {
            Route::get('/group-message-create', 'groupMessageCreate')->name('group-message-create');
        });
    Route::resource('club-team-messages', ClubTeamMessageController::class);

    Route::resource('club-messages', ClubMessageController::class);

    Route::resource('club-manges', ClubMangeController::class);

    Route::controller(ClubMangeMemberController::class)
        ->prefix('club-mange-members')
        ->as('club-mange-members.')
        ->group(function () {
            Route::get('{clubMange}/create', 'create')->name('create');
            Route::post('{clubMange}/store', 'store')->name('store');
            Route::get('{member}/edit', 'edit')->name('edit');
            Route::patch('{member}', 'update')->name('update');
            Route::delete('{member}', 'destroy')->name('destroy');
        });

    Route::controller(MettingController::class)
        ->prefix('mettings')
        ->as('mettings.')
        ->group(function () {
            Route::get('{metting}/update-status/{status}', 'updateStatus')
                ->name('update-status');
            Route::get('{metting}/print', 'print')->name('print');
        });
    Route::resource('mettings', MettingController::class);

    Route::controller(UserController::class)
        ->prefix('users')
        ->as('users.')
        ->group(function () {
            Route::post('save-token', 'saveToken')->name('save-token');
            Route::patch('change-avatar', 'changeAvatar')->name('change-avatar');
            Route::get('profile', 'editPage')->name('profile');
            Route::patch('profile', 'updateProfile');
            Route::get('{user}/edit', 'edit')->name('edit');
            Route::patch('{user}/update', 'update')->name('update');
        });
    Route::resource('users', UserController::class)->except('edit', 'update');

    Route::controller(LoanPlayerController::class)
        ->prefix('loan-players')
        ->as('loan-players.')
        ->group(function () {
            Route::post('change-state/{loanPlayer}', 'changeState')->name('change-state');
        });
    Route::resource('loan-players', LoanPlayerController::class);

    Route::controller(TransferPlayerController::class)
        ->prefix('transfer-players')
        ->as('transfer-players.')
        ->group(function () {
            Route::post('change-state/{transferPlayer}', 'changeState')->name('change-state');
        });
    Route::resource('transfer-players', TransferPlayerController::class);

    Route::controller(YearUpdateController::class)
        ->prefix('year-updates')
        ->as('year-updates.')
        ->group(function () {
            Route::get('show', 'show')->name('show');
            Route::get('teams/{team}', 'teamPlayer')->name('team');
        });
    Route::resource('year-updates', YearUpdateController::class)->except(['show']);

    Route::controller(PostController::class)
        ->prefix('posts')
        ->as('posts.')
        ->group(function () {
            Route::get('change-status/{post}/{status}', 'changeStatus')->name('change-status');
        });
    Route::resource('posts', PostController::class);
    Route::resource('matches', MatchController::class);
    Route::resource('sponsors', SponsorsController::class);

    Route::resource('feedbacks', FeedbackController::class)->only(['index', 'show', 'destroy']);

    Route::controller(CompetitionController::class)
        ->prefix('competitions')
        ->as('competitions.')
        ->group(function () {
            Route::get('archive', 'indexArchive')->name('archive.index');
            Route::post('{competition}/archive', 'storeArchive')->name('archive.store');
            Route::patch('{competition}/active', 'active')->name('active');
            Route::patch('{competition}/un-active', 'unActive')->name('un-active');
            Route::patch('{competition}/send-to-mange', 'sendToMange')->name('send-to-mange');
            Route::get('{competition}/display', 'display')->name('display');
            Route::get('{competition}/show-team/{competitionTeam}', 'teamShow')->name('show-team');
            Route::get('pdf/{competitionTeam}', 'pdf')->name('pdf');
        });
    Route::resource('competitions', CompetitionController::class);

    Route::controller(CompetitionIssueController::class)
        ->prefix('competition/{competition}/competition-issues')
        ->as('competition-issues.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/message', 'messageIndex')->name('message-index');
            Route::get('create', 'create')->name('create');
            Route::get('/message/create', 'messageCreate')->name('message-create');
            Route::get('{competitionIssue}', 'show')->name('show');
            Route::get('{competitionIssue}/close', 'close')->name('close');
        });

    Route::controller(CompetitionMatchController::class)
        ->prefix('competition/{competition}/competition-matches')
        ->as('competition-matches.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::get('show/{match}', 'show')->name('show');
            Route::get('edit/{match}', 'edit')->name('edit');
            Route::delete('destroy/{match}', 'destroy')->name('destroy');
            Route::get('refree-report/{match}', 'refreeReport')->name('refree-report');
            Route::get('refree-report/{match}/pdf', 'refreeReportPdf')->name('refree-report.pdf');
            Route::get('admin-report/{match}', 'adminReport')->name('admin-report');
            Route::get('admin-report/{match}/pdf', 'adminReportPdf')->name('admin-report.pdf');
            Route::get('pdf/{match}', 'pdf')->name('pdf');
        });

    Route::controller(MatchPlayerController::class)
        ->prefix('competition-match/{match}/players')
        ->as('match-players.')
        ->group(function () {
            Route::get('edit/{player}', 'edit')->name('edit');
            Route::patch('update/{player}', 'update')->name('update');
            Route::post('add-goal/{player}', 'addGoal')->name('add-goal');
            Route::delete('delete-goal/{player}/{index}', 'deleteGoal')->name('delete-goal');
        });

    Route::controller(MatchAssistantController::class)
        ->prefix('competition-match/{match}/assistants')
        ->as('match-assistants.')
        ->group(function () {
            Route::get('edit/{assistant}', 'edit')->name('edit');
            Route::patch('update/{assistant}', 'update')->name('update');
        });

    Route::controller(OutLoanPlayerController::class)
        ->prefix('out-loan-players')
        ->as('out-loan-players.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('{outLoanPlayer}', 'show')->name('show');
            Route::get('{outLoanPlayer}/approve', 'approve')->name('approve');
            Route::get('{outLoanPlayer}/cancel', 'cancel')->name('cancel');
        });

    });