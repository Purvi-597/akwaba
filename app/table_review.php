<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class table_review extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'table_review';
}
