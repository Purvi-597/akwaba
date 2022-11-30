<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_model extends Model
{
    use HasFactory;
    protected $table = 'model';

    protected $fillable = ['make_id','code','title'];

}
