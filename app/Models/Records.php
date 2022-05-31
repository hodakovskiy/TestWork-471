<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tags;

class Records extends Model
{

    use HasFactory;

    protected $fillable = [
      'title'
    ];

    public function tags()
    {
        return $this->belongsToMany(
                Tags::class,
                'records_tags',
                'records_id',
                'tags_id'
        )->withPivot('description');
    }

}
