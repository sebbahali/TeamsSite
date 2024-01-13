<?php

namespace App\Http\Controllers\API;

use App\Models\Club;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response as ApiResponse;


class GeneralController extends APIController
{

    public function ourMessage()
    {

        $club = Club::first();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $club->message,
        ]);
    }

    public function ourPhilosophy()
    {

        $club = Club::first();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $club->philosphoy,
        ]);
    }

    public function ourVision()
    {

        $club = Club::first();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $club->vision,
        ]);
    }

    public function users()
    {

        $users = User::whereRoleIs('superadministrator')->orWhereRoleIs('club_leader')->get();
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => $users,
        ]);
    }

    public function teams()
    {
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => [
                ['id' => 1, 'name' => \App\Enums\TeamMessageTarget::TeamSecretary->value],
                ['id' => 2, 'name' => \App\Enums\TeamMessageTarget::TeamLeader->value]
            ]
        ]);
    }

    public function functionalRoles()
    {
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => config()->get('constants.functionalRoles')
        ]);
    }

    public function technicalRoles()
    {
        return $this->response([
            'status' => true,
            'message' => __('messages.success'),
            'info' => config()->get('constants.technicalRoles')
        ]);
    }


}
