<?php

namespace App\Http\Controllers\API;

use App\Models\Team;
use App\Models\TeamMessage;
use App\Models\TeamMessageNotefication;
use App\Models\TeamMessageReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response as ApiResponse;
use Illuminate\Validation\Rule;

class TeamController extends APIController
{

    public function index()
    {
        $team = $this->team();
        $info = Team::with(['club', 'players'])->withCount(['TransferPlayers', 'loanPlayers', 'messages'])->find($team->id);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function own()
    {
        $team = $this->team();
        $info = Team::with(['club', 'players'])->find($team->id);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function other()
    {
        $team = $this->team();
        $info = Team::where('id', '!=', $team->id)->get();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function transferRequests(Request $request)
    {
        $team = $this->team();
        $info = $team->TransferPlayers()->search($request, $team)->with(['basic', 'sender', 'player'])->paginate(10);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function loanRequests(Request $request)
    {
        $team = $this->team();
        $info = $team->loanPlayers()->search($request, $team)->with(['basic', 'sender', 'player'])->paginate(10);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function showTransferRequests(Request $request)
    {
        $team = $this->team();
        $info = $team->TransferPlayers()->where('id',$request->id)->with(['basic', 'sender', 'player'])->first();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function showLoanRequests(Request $request)
    {
        $team = $this->team();
        $info = $team->loanPlayers()->where('id',$request->id)->with(['basic', 'sender', 'player'])->first();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function messages(Request $request)
    {
        $team = $this->team();
        if (isset($request->id)) {
            $info = TeamMessage::with('send')->find($request->id);
        } else {
            $info = TeamMessage::with('send')->latest()->search($request, $team)->paginate(10);
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
            'id' => 'required|exists:team_messages,id',
            'status' => [
                'required',
                Rule::in([1, 0]),
            ],
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $data = tap(TeamMessage::find($request->id))->update(['status' => $request->status]);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $data
        ]);
    }

    public function update(Request $request)
    {
        $team = $this->team();
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:2', 'max:255', "unique:teams,id,$team->id"],
            'email' => ['required', 'email', "unique:teams,id,$team->id"],
            'phone' => ['required', 'string', 'min:4', 'max:20'],
            'message_code' => ['required', 'string', 'min:1', 'max:10'],
            'description' => ['required', 'string', 'min:2'],
            'logo' => 'nullable|image|max:5000',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }

        if ($request->file('logo')) {
            if ($team->logo) {
                Storage::delete($team->getOriginalRaw('logo'));
            }
            $imagePath = $request->file('logo')->store('logo', 'teams');
            $team->logo = $imagePath;
        }

        $team->name = $request->name;
        $team->email = $request->email;
        $team->phone = $request->phone;
        $team->message_code = $request->message_code;
        $team->description = $request->description;

        $team->save();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $team
        ]);
    }

    public function storeMessages(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|string',
            'body' => 'required|string',
            'target' => [
                'required',
                Rule::in([1, 2]),
            ],
            'file' => 'nullable|file|max:5000',
            'team' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $team = $this->team();
        $file_path = ($request->file) ? $request->file->store('team_message', 'messages') : null;
        $target = $request->target == 1 ? \App\Enums\TeamMessageTarget::TeamSecretary->value:\App\Enums\TeamMessageTarget::TeamLeader->value;
        $message = TeamMessage::create([
            'sender_id' => $team->id,
            'receiver_id' => $request->team,
            'target' => $target,
            'subject' => $request->subject,
            'body' => $request->body,
            'file' => $file_path,
        ]);
        $data['title'] = 'رسالة جديدة من فريق : ' . $team->name;
        $data['body'] = 'لقد وصلتك رسالة جديدة';
        $data['message_id'] = $message->id;
        $data['type'] = 'team_message';
        $receiver = Team::find($request->team);
        $receiver->sendNotification($data);
        TeamMessageNotefication::create([
            'team_id' => $request->team,
            'title' => $data['title'],
            'link' => route('frontend.team-messages.show', $data['message_id']),
            'body' => $data['body'],
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
            'message_id' => 'required|exists:team_messages,id',
            'body' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $team = $this->team();

        $message = TeamMessage::find($request->message_id);
        $teamMessage = TeamMessageReply::create([
            'team_message_id' => $request->message_id,
            'team_id' => $team->id,
            'body' => $request->body,
        ]);

        $data['title'] = 'قام : ' . $team->name . ' بارسال رد';
        $data['body'] = 'هناك رد على المراسلة';
        $data['message_id'] = $message->id;
        $data['type'] = 'team_message_reply';
        $receiver = Team::find($message->receiverTeam()->id);
        $receiver->sendNotification($data);
        TeamMessageNotefication::create([
            'team_id' => $message->receiverTeam()->id,
            'title' => $data['title'],
            'link' => route('frontend.team-messages.show', $message->id),
            'body' => $data['body'],
        ]);

        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $teamMessage
        ]);
    }

}
