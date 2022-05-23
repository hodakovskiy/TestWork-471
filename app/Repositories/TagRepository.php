<?php

namespace App\Repositories;

use App\Models\Records;
use App\Repositories\Interfaces\RepositoryInterface;
/**
 * Description of RecordRepository
 *
 * @author sergey
 */
class TagsRepository implements RepositoryInterface
{
    public function all()
    {
        return Records::all();
    }
}
