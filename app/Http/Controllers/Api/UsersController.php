<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Models\User;




class UsersController extends BaseController
{

    /**
     * Random user profile 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = User::factory()->make();

         return $this->sendResponse($user, 'User login successfully.');
    }

}
