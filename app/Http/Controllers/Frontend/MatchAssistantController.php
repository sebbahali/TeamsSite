<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompetitionMatch;
use App\Models\MatchAssistant;
use Illuminate\Http\Request;

class MatchAssistantController extends Controller
{
    public function create(CompetitionMatch $match)
    {
        if ($match->home != team()->id && $match->away != team()->id) {
            session()->flash("error_message", 'عذرا لا يمكنك فتح هذه الصفحة');
            return to_route('frontend.index');
        }

        $match->isOpenForTeam();

        return view('frontend.match-assistants.create', ['match' => $match]);
    }

    public function destroy(CompetitionMatch $match, MatchAssistant $assistant)
    {
        $assistant->delete();

        session()->flash('success_message', 'تم الحذف بنجاح');

        return back();
    }
}
