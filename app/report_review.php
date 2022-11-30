<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class report_review extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'report_review';
}
