<?php

namespace App\Http\Controllers\API;

use App\Models\Assistant;
use App\Models\Team;
use App\Models\TeamMange;
use App\Models\TeamMessage;
use App\Models\TeamMessageNotefication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response as ApiResponse;
use Illuminate\Validation\Rule;

class TeamManagementController extends APIController
{

    public function index()
    {
        $team = $this->team();
        $info = TeamMange::where('team_id', $team->id)->paginate(10);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $info = TeamMange::create([
            'start' => $request->start_date,
            'end' => $request->end_date,
        ]);

        return $this->response([
            'status' => true,
            'message' => __('messages.team_management_added'),
            'info' => $info
        ]);
    }

}
