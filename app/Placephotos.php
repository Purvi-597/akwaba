<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Placephotos extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'Placephotos';
}
