<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $feedbacks = Feedback::orderBy('created_at', 'DESC')->paginate(12);

        return view('dashboard.feedbacks.index', [
            'feedbacks' => $feedbacks,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Feedback  $feedback
     * @return View
     */
    public function show(Feedback $feedback): View
    {
        if (!$feedback->status) {
            $feedback->status = 1;
            $feedback->save();
        }

        return view('dashboard.feedbacks.show', ['feedback' => $feedback]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Feedback  $feedback
     * @return RedirectResponse
     */
    public function destroy(Feedback $feedback): RedirectResponse
    {
        $feedback->delete();

        session()->flash('success_message', 'تم حذف التقييم بالنجاح');

        return to_route('dashboard.feedbacks.index');
    }
}
