<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assistant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assistants = Assistant::where('team_id', team()->id)->paginate(12);

        return view('frontend.assistants.index', ['assistants' => $assistants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('frontend.assistants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'card_id' => 'required',
            'name' => 'required',
            'birthdate' => 'required|date',
            'role' => [
                'required',
                function ($attribute, $value, $fail) {
                    $assistantsCount = Assistant::where('team_id', team())
                        ->where('role', request('role'))->count();
                    if ($assistantsCount > 0) {
                        $fail('هذه الصفة مستخدمة من قبل');
                    }
                },
            ],
            'sport_image' => 'required|image|max:5000',
            'front_image' => 'required|image|max:5000',
        ]);

        $sportImagePath = $request->file('sport_image')->store('assistants', 'teams');
        if (! Storage::disk('teams')->exists($sportImagePath)) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        $frontImagePath = $request->file('front_image')->store('assistants', 'teams');
        if (! Storage::disk('teams')->exists($frontImagePath)) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        $data = $request->all();
        $data['sport_image'] = $sportImagePath;
        $data['front_image'] = $frontImagePath;
        $data['team_id'] = team()->id;

        Assistant::create($data);

        session()->flash('success_message', 'تم اضافة عضو الجهاز الفني بنجاح');
        return to_route('frontend.assistants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function show(Assistant $assistant)
    {
        if ($assistant->team_id != team()->id) {
            session()->flash('error_message', 'عذرا لايمكنك فتح الصفحة');
        }

        return view('frontend.assistants.show', ['assistant' => $assistant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Assistant  $assistant
     * @return \Illuminate\Http\Response
     */
    public function edit(Assistant $assistant)
    {
        if ($assistant->team_id != team()->id) {
            session()->flash('error_message', 'عذرا لايمكنك فتح الصفحة');
        }

        return view('frontend.assistants.edit', ['assistant' => $assistant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Assistant $assistant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assistant $assistant)
    {
        if ($assistant->team_id != team()->id) {
            session()->flash('error_message', 'عذرا لايمكنك فتح الصفحة');
        }

        $request->validate([
            'card_id' => 'required',
            'name' => 'required',
            'birthdate' => 'required|date',
            'role' => [
                'required',
                function ($attribute, $value, $fail) use ($assistant) {
                    $assistantsCount = Assistant::where('team_id', team())
                        ->where('id', '!=', $assistant->id)
                        ->where('role', request('role'))->count();
                    if ($assistantsCount > 0) {
                        $fail('هذه الصفة مستخدمة من قبل');
                    }
                },
            ],
            'sport_image' => 'nullable|image|max:5000',
            'front_image' => 'nullable|image|max:5000',
        ]);

        if ($request->hasFile('sport_image')) {
            Storage::delete($assistant->sport_image);

            $sportImagePath = $request->file('sport_image')->store('assistants', 'teams');
            if (! Storage::disk('teams')->exists($sportImagePath)) {
                return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
            }
            $assistant->update(['sport_image' => $sportImagePath]);
        }

        if ($request->hasFile('front_image')) {
            Storage::delete($assistant->front_image);

            $frontImagePath = $request->file('front_image')->store('assistants', 'teams');
            if (! Storage::disk('teams')->exists($frontImagePath)) {
                return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
            }
            $assistant->update(['front_image' => $sportImagePath]);
        }

        $data = $request->only(['card_id', 'name', 'birthdate', 'role']);
        $assistant->update($data);

        session()->flash('success_message', 'تم التعديل بنجاح');
        return to_route('frontend.assistants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Assistant $assistant
     * @return RedirectResponse
     */
    public function destroy(Assistant $assistant): RedirectResponse
    {
        if ($assistant->team_id != team()->id) {
            session()->flash('error_message', 'عذرا لايمكنك فتح الصفحة');
        }

        $assistant->delete();

        session()->flash('success_message', 'تم الحذف بنجاح');

        return to_route('frontend.assistants.index');
    }
}
