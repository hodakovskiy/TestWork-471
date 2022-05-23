<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Repositories\Interfaces\RecordRepositoryInterface;


class RecordsController extends BaseController
{
    private $recordRepository;
    
    public function __construct(RecordRepositoryInterface $RecordRepository)
    {
        $this->recordRepository = $RecordRepository;
    }
    
     public function index()
    {
        $blogs = $this->recordRepository->all();
        dd($blogs);
    }

}
