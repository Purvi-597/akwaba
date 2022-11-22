<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'faq';
    protected $fillable = [
        'question','question_fr','status','answer_fr','answer'
        ];

        protected $dates = ['deleted_at'];

    //ublic $timestamps = false;
}
