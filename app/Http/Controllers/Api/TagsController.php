<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use App\Repositories\Interfaces\RepositoryInterface;

class TagsController extends BaseController
{
   private $tagRepository;
   
   public function __construct(TagRepositoryInterface $tagRepository)
   {
       $this->tagRepository = $tagRepository;
   }
   
   public function index()
    {
        $blogs = $this->blogRepository->all();
        return view('blog')->withBlogs($blogs);
    }

}
