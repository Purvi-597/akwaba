<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class my_address extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'my_address';
}
