<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

/**
 *
 * @author sergey
 */
interface RecordRepositoryInterface
{

    public function all();

    public function order();

    public function getRecord(Request $request);


}
