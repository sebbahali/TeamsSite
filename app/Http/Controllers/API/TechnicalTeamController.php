<?php

namespace App\Http\Controllers\API;

use App\Models\Assistant;
use App\Models\Team;
use App\Models\TeamMessage;
use App\Models\TeamMessageNotefication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response as ApiResponse;
use Illuminate\Validation\Rule;

class TechnicalTeamController extends APIController
{

    public function index()
    {
        $team = $this->team();
        $assistants = Assistant::where('team_id', $team->id)->paginate(10);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $assistants
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_id' => 'required',
            'name' => 'required',
            'birthdate' => 'required|date',
            'role' => [
                'required',
                Rule::in([1,2,3,4,5,6,7,8,9,10,11]),
                function ($attribute, $value, $fail) {
                    $team = $this->team();
                    $role = technicalRoles(request('role'));
                    $assistantsCount = Assistant::where('team_id', $team)
                        ->where('role', $role)->count();
                    if ($assistantsCount > 0) {
                        $fail('هذه الصفة مستخدمة من قبل');
                    }
                },
            ],
            'sport_image' => 'required|image|max:5000',
            'front_image' => 'required|image|max:5000',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $sportImagePath = $request->file('sport_image')->store('assistants', 'teams');
        if (!Storage::disk('teams')->exists($sportImagePath)) {
            return response()->json(['status' => false, 'message' => trans('messages.upload_image_failed'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }

        $frontImagePath = $request->file('front_image')->store('assistants', 'teams');
        if (!Storage::disk('teams')->exists($frontImagePath)) {
            return response()->json(['status' => false, 'message' => trans('messages.upload_image_failed'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $team = $this->team();
        $data = $request->all();
        $data['role'] = technicalRoles(request('role'));
        $data['sport_image'] = $sportImagePath;
        $data['front_image'] = $frontImagePath;
        $data['team_id'] = $team->id;

        $assistant = Assistant::create($data);

        return $this->response([
            'status' => true,
            'message' => __('messages.technical_staff_member_added'),
            'info' => $assistant
        ]);
    }
    public function update(Request $request)
    {
        $assistant = Assistant::find(request('technical_id'));
        $role = technicalRoles(request('role'));
        $validator = Validator::make($request->all(), [
            'technical_id' => 'required|exists:assistants,id',
            'card_id' => 'required',
            'name' => 'required',
            'birthdate' => 'required|date',
            'role' => [
                'required',
                Rule::in([1,2,3,4,5,6,7,8,9,10,11]),
                function ($attribute, $value, $fail) use($assistant,$role) {
                    $team = $this->team();
                    $assistantsCount = Assistant::where('team_id', $team)
                        ->where('id', '!=', $assistant->id??null)
                        ->where('role', $role)->count();
                    if ($assistantsCount > 0) {
                        $fail('هذه الصفة مستخدمة من قبل');
                    }
                },
            ],
            'sport_image' => 'nullable|image|max:5000',
            'front_image' => 'nullable|image|max:5000',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }

        if ($request->hasFile('sport_image')) {
            Storage::delete($assistant->sport_image);

            $sportImagePath = $request->file('sport_image')->store('assistants', 'teams');
            if (! Storage::disk('teams')->exists($sportImagePath)) {
                return response()->json(['status' => false, 'message' => trans('messages.upload_image_failed'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
            }
            $assistant->update(['sport_image' => $sportImagePath]);
        }

        if ($request->hasFile('front_image')) {
            Storage::delete($assistant->front_image);

            $frontImagePath = $request->file('front_image')->store('assistants', 'teams');
            if (! Storage::disk('teams')->exists($frontImagePath)) {
                return response()->json(['status' => false, 'message' => trans('messages.upload_image_failed'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
            }
            $assistant->update(['front_image' => $sportImagePath]);
        }

        $data = $request->only(['card_id', 'name', 'birthdate', 'role']);
        $data['role'] = $role;
        $assistant->update($data);


        return $this->response([
            'status' => true,
            'message' => __('messages.technical_staff_member_added'),
            'info' => $assistant
        ]);
    }
    public function destroy(Assistant $assistant)
    {
        $team = $this->team();
        if ($assistant->team_id != $team->id) {
            return response()->json(['status' => false, 'message' => 'عذرا لايمكنك فتح الصفحة', 'info' => null, 'errors' => null], ApiResponse::HTTP_FORBIDDEN);
        }
        $assistant->delete();
        return $this->setStatusCode(ApiResponse::HTTP_ACCEPTED)->response([
            'status' => true,
            'message' => __('messages.deleted'),
            'info' => null
        ]);

    }
}
