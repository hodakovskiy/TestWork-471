<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Records;

class Tags extends Model
{

    use HasFactory;

    protected $fillable = [
      'name'
    ];

    public function records()
    {
        return $this->belongsToMany(
                Records::class,
                'records_tags',
                'tags_id',
                'records_id'
        )->withPivot('description');
    }

}
