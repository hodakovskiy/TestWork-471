<?php

namespace App\Repositories;

use App\Models\Records;
use App\Models\Tags;
use App\Repositories\Interfaces\RecordRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Description of RecordRepository
 *
 * @author sergey
 */
class RecordRepository implements RecordRepositoryInterface
{

    public function all()
    {
        return Records::with('tags')->get();
    }

    public function getRecord(Request $request)
    {

        $teg = $request->teg;
        $title = $request->title;

        if (empty($teg) && empty($title)) {
            return false;
        }

        $records = Records::select('records.title')
            ->join('records_tags', 'records.id', '=', 'records_tags.records_id')
            ->join('tags', 'tags.id', '=', 'records_tags.tags_id');

        if ($title) {
            $records->where('title', 'like', '%' . $title . '%');
        }
        if ($teg) {
            $records->whereName($teg);
        }



        return $records->get();
    }

    public function order()
    {
        $records = Records::with('tags')->orderByDesc(Tags::select('name')
                    ->whereColumn('tags.id', 'records.id')
                    ->latest()
                    ->take(5)
            )->get();

        return $records;
    }

}
