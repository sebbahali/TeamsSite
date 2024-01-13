<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\PlayerApproveStatus;
use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;
use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use App\Models\TeamNotefication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Spatie\Browsershot\Browsershot;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Team $team)
    {
        $players = Player::where('team_id', $team->id)
            ->where('approve_status', PlayerApproveStatus::Approved)
            ->when(request('search'), function ($query) {
                return $query->where('name', 'like', '%' . request('search') . '%')
                    ->orWhere('card_id', 'like', '%' . request('search') . '%');
            })->with('team')->paginate(12);

        return view('dashboard.players.index', ['players' => $players, 'team' => $team]);
    }

    public function requestIndex()
    {
        return view('dashboard.players.request-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.players.create');
    }

    /**
     * Display the specified resource.
     *
     * @param string $team
     * @param  Player  $player
     * @return View
     */
    public function show(Player $player): View
    {
        return view('dashboard.players.show', ['player' => $player]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        return view('dashboard.players.edit', ['player' => $player]);
    }

    public function firstApprove(Player $player, $status): RedirectResponse
    {
        if (!in_array($status, ['draft', 'club_approve'])) {
            session()->flash('error_message', 'عذرا هناك خطاء الرجاء المحاولة مرة اخرة');
            return redirect()->route('dashboard.players.show', $player->card_id);
        }

        $player->approve_status = $status;
        $player->save();

        // send notefication
        ($status == 'draft') ?
            TeamNotefication::create([
                'team_id' => $player->team->id,
                'title' => "تم رفض تسجيل اللاعب : $player->name",
                'link' => route('frontend.players.show', $player->card_id),
                'body' => "تم الغاء طلب تسجيل اللاعب : $player->name,
                        الرجاء التاكد من البيانات و لمذيد من التفاصيل الرجاء مراسلة  النادي",
            ]) : // canceled
            TeamNotefication::create([
                'team_id' => $player->team->id,
                'title' => "تم قبول تسجيل اللاعب : $player->name",
                'link' => route('frontend.players.show', $player->card_id),
                'body' => "تم قبول طلب تسجيل اللاعب : $player->name, الرجاء سداد المبلغ المطلوب لتنشيط اشتراك اللاعب",
            ]); // approve

        ($status == 'draft') ?
            session()->flash('success_message', 'تم الغاء طلب التسجيل بنجاح') : // canceled
            session()->flash('success_message', 'تم قبول طلب التسجيل بنجاح'); // approve

        return redirect()->route('dashboard.players.show', ['player' => $player->card_id]);
    }

    public function affiliate(Player $player): RedirectResponse
    {
        $player->register_number = registerNumber();
        $player->approve_status = PlayerApproveStatus::Approved;
        $player->join_status = PlayerJoinStatus::Affiliated;
        $player->save();

        session()->flash('success_message', 'تم انتساب اللاعب بنجاح');
        return redirect()->route('dashboard.players.show', ['player' => $player->card_id]);
    }
    
    public function arrest(Player $player): RedirectResponse
    {
        $player->join_status = PlayerJoinStatus::Stoped;
        $player->save();

        session()->flash('success_message', 'تم ايقاف اللاعب بنجاح');
       return redirect()->route('dashboard.players.show', ['player' => $player->card_id]);
       
    }
    
    public function affiliation(Player $player): RedirectResponse
    {
        $player->join_status = PlayerJoinStatus::Affiliated;
        $player->save();

        session()->flash('success_message', 'تم ارجاع انتساب اللاعب بنجاح');
       return redirect()->route('dashboard.players.show', ['player' => $player->card_id]);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Player  $player
     * @return RedirectResponse
     */
    public function destroy(Player $player): RedirectResponse
    {
        $team_slug = $player->team->slug;
        
        $player->delete();
        $player->forceDelete();

        session()->flash('success_message', 'تم حذف اللاعب بنجاح');

        return redirect()->route('dashboard.players.index', $team_slug);
    }
    
    public function pdf(Team $team)
    {
        $players = $team->players()
            ->where('approve_status', PlayerApproveStatus::Approved->value)
            ->where('join_status', '!=', PlayerJoinStatus::Stoped)
            ->where('join_status', '!=', PlayerJoinStatus::UnJoin)
            ->where('year_status', PlayerYearStatus::Active)
            ->get();

        return view('pdf.players', [
            'players' => $players,
            'team' => $team,
        ]);

        // $filePath = storage_path() . '/app/livewire-tmp/' . rand(111111111, 999999999) . '.pdf';

        // Browsershot::html($html)
        //     ->emulateMedia('screen')
        //     ->showBackground()
        //     ->margins(10, 10, 10, 10)
        //     ->format('A4')
        //     ->landscape()
        //     ->save($filePath);
    
        // return response()->make(file_get_contents($filePath), 200, [
        //     'Content-Type' => 'application/pdf',
        // ]);
    }
}
