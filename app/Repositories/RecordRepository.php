<?php

namespace App\Repositories;

use App\Models\Records;
use App\Repositories\Interfaces\RecordRepositoryInterface;
/**
 * Description of RecordRepository
 *
 * @author sergey
 */
class RecordRepository implements RecordRepositoryInterface
{
    public function all()
    {
        return Records::all();
    }
}
