<?php

namespace App\Http\Controllers\API;

use App\Models\ClubMessageNotefication;
use App\Models\ClubTeamMessage;
use App\Enums\ClubMangeRole;
use App\Enums\ClubTeamMessageSender;
use App\Enums\ClubTeamMessageTarget;
use App\Models\TeamNotefication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response as ApiResponse;
use Illuminate\Validation\Rule;

class NotificationController extends APIController
{


    public function index(Request $request)
    {
        $team = $this->team();
        $info = TeamNotefication::latest()
            ->where('team_id', $team->id)
            ->search($request)
            ->paginate(10);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:team_notefications,id',
            'status' => [
                'required',
                Rule::in([1, 0]),
            ],
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $data = tap(TeamNotefication::find($request->id))->update(['status' => $request->status]);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $data
        ]);
    }


}
