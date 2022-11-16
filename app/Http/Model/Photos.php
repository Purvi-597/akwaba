<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photos extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'photos';
    protected $fillable = [
        'title','title_fr','image', 'address', 'latitude', 'longtitude','status'
        ];

        protected $dates = ['deleted_at'];

    //public $timestamps = false;
}
