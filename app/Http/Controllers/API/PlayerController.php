<?php

namespace App\Http\Controllers\API;

use App\Models\ClubMessageNotefication;
use App\Models\OutLoanPlayer;
use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response as ApiResponse;
use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerApproveStatus;
use App\Enums\LoanOutPlayerStatus;
use App\Enums\PlayerYearStatus;

class PlayerController extends APIController
{
    public function index(Request $request)
    {
        $info = Player::with('team')->search($request)->paginate(10);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }
    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $info = Player::with('team')->where('card_id','like',"%{$request->id}%")->first();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function indexOutLoan(Request $request)
    {
        $team = auth('api-team')->user();
        $team_id = $team->id;
        $info = OutLoanPlayer::with('team')->search($request)->where('team_id', $team_id)
            ->where('status', '!=', LoanOutPlayerStatus::Expired)
            ->paginate(12);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }
    public function showOutLoan(Request $request)
    {
        $team = auth('api-team')->user();
        $team_id = $team->id;
        $info = OutLoanPlayer::with('team')->where('card_id','like',"%{$request->id}%")->first();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }


    public function associate(Request $request)
    {
        $team = $this->team();
        $info = Player::with('team')->search($request)->where('approve_status', PlayerApproveStatus::Approved->value)
            ->where('join_status', '!=', PlayerJoinStatus::Stoped)
        ->where('join_status', '!=', PlayerJoinStatus::UnJoin)
        ->where('year_status', PlayerYearStatus::Active)
        ->when(request('search'), function ($query) {
            return $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('card_id', 'like', '%' . request('search') . '%');
        })->where('team_id', $team->id)->with('team')
        ->paginate(10);


        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_id' => ['required', 'string', 'unique:players', 'min:2', 'max:255'],
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'birth_date' => ['required', 'date'],
            'location' => ['required', 'string', 'min:2', 'max:255'],
            'phone' => ['required', 'string', 'min:3', 'max:30'],
            'player_img' => ['required', 'image', 'max:5000'],
            'card_identy_front' => ['required', 'image', 'max:5000'],
            'card_identy_back' => ['required', 'image', 'max:5000'],
            'player_accept' => ['accepted'],
            'team_accept' => ['accepted'],
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $team = $this->team();
        $data = [];
        $player_img_path = $request->player_img->store('player_img', 'players');
        $card_identy_front_path = $request->card_identy_front->store('card_identy_front', 'players');
        $card_identy_back_path = $request->card_identy_back->store('card_identy_back', 'players');

        if (calcAge($request->birth_date) < 16) {
            $birth_doc_path = $request->birth_doc->store('birth_doc', 'players');
            $father_check_doc_path = $request->father_check_doc->store('father_check_doc', 'players');
            $father_identy_card_path = $request->father_identy_card->store('father_identy_card', 'players');

            $data['birth_doc'] = $birth_doc_path;
            $data['father_check_doc'] = $father_check_doc_path;
            $data['father_identy_card'] = $father_identy_card_path;
        }

        $data['card_id'] = $request->card_id;
        $data['name'] = $request->name;
        $data['birth_date'] = $request->birth_date;
        $data['location'] = $request->location;
        $data['phone'] = $request->phone;
        $data['team_id'] = $team->id;
        $data['player_img'] = $player_img_path;
        $data['card_identy_front'] = $card_identy_front_path;
        $data['card_identy_back'] = $card_identy_back_path;
        $data['approve_status'] = PlayerApproveStatus::Draft;
        $info = Player::create($data);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $info
        ]);
    }

    public function storeOutLoan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_id' => 'required|string|unique:out_loan_players,card_id',
            'name' => 'required|string',
            'birth_date' => 'required|date',
            'start' => 'required|date',
            'end' => 'required|date',
            'sport_image' => 'required|image|max:5000',
            'front_image' => 'required|image|max:5000',
            'letter_image' => 'required|image|max:5000',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'info' => null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $team = $this->team();
        $sport_image_path = $request->sport_image->store('out_loan_players', 'teams');
        $front_image_path = $request->front_image->store('out_loan_players', 'teams');
        $letter_image_path = $request->letter_image->store('out_loan_players', 'teams');

        $outLoanPlayer = OutLoanPlayer::create([
            'card_id' => $request->card_id,
            'name' => $request->name,
            'birthdate' => $request->birth_date,
            'start' => $request->start,
            'end' => $request->end,
            'sport_image' => $sport_image_path,
            'front_card_image' => $front_image_path,
            'loan_letter' => $letter_image_path,
            'status' => LoanOutPlayerStatus::Draft,
            'team_id' => $team->id,
        ]);
        $admin = User::whereRoleIs('superadministrator')->first();
        ClubMessageNotefication::create([
            'user_id' => $admin->id,
            'title' => 'طلب اعارة خارجي من فريق : ' . $team->name,
            'link' => route('dashboard.out-loan-players.show', ['outLoanPlayer' => $outLoanPlayer]),
            'body' => 'طلب اعارة خارجية',
        ]);

        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $outLoanPlayer
        ]);
    }

    public function registrationRequests(Request $request)
    {
        $team = $this->team();
        $players = Player::orderBy('created_at', 'DESC')
            ->where('team_id', $team->id)
            ->where('approve_status', $request->status)
            ->with('team')
            ->paginate(10);
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $players
        ]);
    }


}
