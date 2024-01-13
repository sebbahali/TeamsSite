<?php

namespace App\Http\Controllers\API;

use App\Models\Assistant;
use App\Models\Team;
use App\Models\TeamMange;
use App\Models\TeamMangeMember;
use App\Models\TeamMessage;
use App\Models\TeamMessageNotefication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response as ApiResponse;
use Illuminate\Validation\Rule;

class TeamManagementMemberController extends APIController
{

    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_manage_id' => 'required|exists:team_manges,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $info = TeamMangeMember::where('team_mange_id', $request->team_manage_id)->latest()->paginate(10);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'member_id' => 'required|exists:team_mange_members,id',
            'name' => 'required|string',
            'email' => 'nullable|email',
            'image' => 'nullable|image',
            'role' => [
                'required',
                Rule::in([1,2,3,4]),
            ],
            'phone' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $member = TeamMangeMember::find($request->member_id);
        if ($member->teamMange->status == 0) {
            return response()->json(['status' => false, 'message' => trans('messages.update_member_failed'), 'info' => null], ApiResponse::HTTP_FAILED_DEPENDENCY);
        }

        if ($request->image) {
            $avatarPath = $request->file('image')->store('members', 'teams');
            $exists = Storage::disk('teams')->exists($avatarPath);
        }

        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->avatar = ($request->image) ? $avatarPath : $member->avatar;
        $member->save();

        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $member
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'nullable|email',
            'image' => 'required|image',
            'role' => [
                'required',
                Rule::in([1, 2, 3, 4]),
            ],
            'phone' => 'required|string',
            'team_management_id' => 'required|exists:team_manges,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $team_manage = TeamMange::find($request->team_management_id);
        if ($team_manage->status == 0) {
            return response()->json(['status' => false, 'message' => trans('messages.create_member_failed'), 'info' => null], ApiResponse::HTTP_FAILED_DEPENDENCY);
        }

        $avatarPath = $request->file('image')->store('members', 'teams');

        $exists = Storage::disk('teams')->exists($avatarPath);
        $team = $this->team();
        $team_manage = TeamMangeMember::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $avatarPath,
            'role' => functionalRoles($request->role),
            'team_mange_id' => $team_manage->id,
            'team_id' => $team->id,
        ]);
        return $this->response([
            'status' => true,
            'message' => __('messages.team_management_added'),
            'info' => $team_manage
        ]);
    }


    public function destroy(Request $request)
    {
        $request['member_id'] = $request->member;
        $validator = Validator::make($request->all(), [
            'member_id' => 'required|exists:team_mange_members,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $member = TeamMangeMember::find($request->member_id);
        $member->delete();
        return $this->setStatusCode(ApiResponse::HTTP_ACCEPTED)->response([
            'status' => true,
            'message' => __('messages.deleted'),
            'info' => null
        ]);

    }
}
