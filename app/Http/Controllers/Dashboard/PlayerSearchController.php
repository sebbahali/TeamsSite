<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Enums\PlayerApproveStatus;
use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;

class PlayerSearchController extends Controller
{
    /**
     * Constructer
     */
    public function __construct()
    {
        $this->middleware('permission:read-search-players')->only(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $players = Player::where('approve_status', PlayerApproveStatus::Approved)
            ->when(request('search'), function ($query) {
                return $query->where('name', 'like', '%' . request('search') . '%')
                    ->orWhere('card_id', 'like', '%' . request('search') . '%');
            })->when(request('status'), function ($query) {
                switch (request('status')) {
                    case 'UnJoin':
                        $query->where('join_status', PlayerJoinStatus::UnJoin);
                        break;
                    case 'Affiliated':
                        $query->where('join_status', PlayerJoinStatus::Affiliated);
                        break;
                    case 'Loan':
                        $query->where('join_status', PlayerJoinStatus::Loan);
                        break;
                    case 'Stoped':
                        $query->where('join_status', PlayerJoinStatus::Stoped);
                        break;
                }
            })
            ->with('team')->paginate(12);

        return view('dashboard.players-search.index', ['players' => $players]);
    }


    /**
     * Display the specified resource.
     *
     * @param $id
     * @return View
     */
    public function show($id): View
    {

        $player = Player::where('card_id', 'like', "%$id%")->first();
        if (empty($player)) abort(404);
        return view('dashboard.players-search.show', ['player' => $player]);
    }
}
