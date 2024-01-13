<?php

namespace App\Http\Controllers\API;

use App\Models\ClubMessage;
use App\Models\ClubMessageNotefication;
use App\Models\ClubTeamMessage;
use App\Enums\ClubMangeRole;
use App\Enums\ClubTeamMessageSender;
use App\Enums\ClubTeamMessageTarget;
use App\Models\ClubTeamMessageReply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response as ApiResponse;
use Illuminate\Validation\Rule;

class ClubController extends APIController
{


    public function messages(Request $request)
    {
        $team = $this->team();
        if (isset($request->id)) {
            $info = $team->clubTeamMessages()->find($request->id);
        } else {
            $info = $team->clubTeamMessages()->latest()->search($request, $team)->paginate(10);

        }
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function updateMessages(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:club_team_messages,id',
            'status' => [
                'required',
                Rule::in([1, 0]),
            ],
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $data = tap(ClubTeamMessage::find($request->id))->update(['status' => $request->status]);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $data
        ]);
    }

    public function storeMessages(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|string',
            'body' => 'required|string',
            'target' => 'required|string|exists:users,id',
            'file' => 'nullable|file|max:5000',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $team = $this->team();
        $file_path = ($request->file) ? $request->file->store('club-team_message', 'messages') : null;

        $message = ClubTeamMessage::create([
            'team_id' => $team->id,
            'user_id' => $request->target,
            'target' => $this->getTargetRole($request),
            'sender' => ClubTeamMessageSender::Team,
            'subject' => $request->subject,
            'body' => $request->body,
            'file' => $file_path,
        ]);

        $admin = User::whereRoleIs('superadministrator')->first();

        ClubMessageNotefication::create([
            'user_id' => $admin->id,
            'title' => 'رسالة جديدة من فريق : ' . $team->name,
            'link' => route('dashboard.club-team-messages.show', $message->id),
            'body' => 'لقد وصلتك رسالة جديدة',
        ]);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $message
        ]);
    }

    public function replyMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message_id' => 'required|exists:club_team_messages,id',
            'body' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $team = $this->team();

        $message = ClubTeamMessage::find($request->message_id);
        $clubTeamMessage = ClubTeamMessageReply::create([
            'club_team_message_id' => $message->id,
            'team_id' => $team->id,
            'user_id' => $message->user_id,
            'sender' => ClubTeamMessageSender::Team,
            'body' => $request->body,
        ]);

        ClubMessageNotefication::create([
            'user_id' => $message->user_id,
            'title' => 'قام : ' . $team->name . ' بارسال رد',
            'link' => route('dashboard.club-team-messages.show', $message->id),
            'body' => 'هناك رد على المراسلة',
        ]);


        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $clubTeamMessage
        ]);
    }

    protected function getTargetRole(Request $request)
    {
        $user = User::find($request->target);

        if ($user->roles()->first()->name = 'club_leader') {
            return ClubTeamMessageTarget::ClubLeader;
        } else {
            return ClubTeamMessageTarget::ClubSecretary;
        }
    }
}
