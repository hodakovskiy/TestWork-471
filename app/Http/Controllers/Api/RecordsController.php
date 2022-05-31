<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Repositories\Interfaces\RecordRepositoryInterface;

class RecordsController extends BaseController
{

    private $recordRepository;

    public function __construct(RecordRepositoryInterface $RecordRepository)
    {
        $this->recordRepository = $RecordRepository;
    }

    /**
     * Will list all record and tags 
     * @return json
     */
    public function index()
    {
        $records = $this->recordRepository->all();

        if (empty($records)) {
            return $this->sendError($records, 'Not records');
        }

        return $this->sendResponse($records, 'Successfully.');
    }
    
    /**
     * Sort by tag name of all entries
     * 
     * @return json
     */

    public function order()
    {
        $records = $this->recordRepository->order();

        if (empty($records)) {
            return $this->sendError($records, 'Not records');
        }

        return $this->sendResponse($records, 'Successfully.');
    }

    /**
     * Search by title and tag name
     * 
     * @param Request $request 
     * @return type
     */
    
    public function record(Request $request)
    {
        $records = $this->recordRepository->getRecord($request);

        if (empty($records)) {
            return $this->sendError($records, 'Not records');
        }

        return $this->sendResponse($records, 'Successfully.');
    }



}
