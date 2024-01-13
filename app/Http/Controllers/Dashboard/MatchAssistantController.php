<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CompetitionMatch;
use App\Models\MatchAssistant;
use Illuminate\Http\Request;

class MatchAssistantController extends Controller
{
    public function edit(CompetitionMatch $match, MatchAssistant $assistant)
    {
        return view('dashboard.match-assistants.edit', [
            'match' => $match,
            'assistant' => $assistant,
        ]);
    }

    public function update(Request $request, CompetitionMatch $match, MatchAssistant $assistant)
    {
        $assistant->update([
            'r' => $request->r,
            'y' => $request->y,
        ]);

        session()->flash('success_message', 'تم التعديل بنجاح');
        return to_route('dashboard.match-assistants.edit', ['match' => $match, 'assistant' => $assistant]);
    }
}
