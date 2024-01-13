<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\School;
use App\Models\Team;

class APIController extends Controller
{
    /**
     * @var int
     */
    protected $statusCode = 200;

    function __construct()
    {
    }


    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|null|Team
     */
    public function team(){
        return auth('api-team')->user();
    }
    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function response($data)
    {
        $headers = ['Content-type' => 'application/json; charset=utf-8'];
        return response()->json($data, $this->getStatusCode(), $headers, JSON_NUMERIC_CHECK);
    }
}
