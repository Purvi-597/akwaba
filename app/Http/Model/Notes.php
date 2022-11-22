<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notes extends Model
{

    // use HasFactory,SoftDeletes;
    protected $table = 'notes';
    protected $fillable = [
        'osm_id','user_id','notes'
    ];

}
