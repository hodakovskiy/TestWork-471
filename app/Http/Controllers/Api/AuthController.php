<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class AuthController extends BaseController
{

    /**
     * Successfully.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return $this->sendResponse([], 'Successfully.');
    }

    public function accessDenied()
    {
        return $this->sendError('Unauthorised.', ['error' => 'Access is denied']);
    }

}
