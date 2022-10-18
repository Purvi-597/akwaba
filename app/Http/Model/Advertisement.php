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
        'title', 'status', 'image','link'
        ];

        protected $dates = ['deleted_at'];

    public $timestamps = false;
}
