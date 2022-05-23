<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;


class DeniedController extends BaseController
{

     /**
     * Unauthorised.
     *
     * @return \Illuminate\Http\Response
     */

    public function __invoke()
    {
         return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
    }

}
