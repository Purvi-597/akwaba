<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'advertisement';
    protected $fillable = [
        'title','title_fr','status', 'image','link','date','time','order','mobile_ads'
        ];

        protected $dates = ['deleted_at'];

    //public $timestamps = false;
}
