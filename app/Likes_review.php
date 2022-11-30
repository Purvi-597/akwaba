<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Likes_review extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'likes_review';
}
