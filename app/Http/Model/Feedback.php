<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{

    // use HasFactory,SoftDeletes;
    protected $table = 'feedback';
    protected $fillable = [
        'name','email','contact_no','message','status'
    ];

}
