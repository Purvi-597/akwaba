<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model
{

    // use HasFactory,SoftDeletes;
    protected $table = 'reviews_rating';
    protected $fillable = [
        'osm_id','title','user_id','message','ratings','status','image'
    ];

}
