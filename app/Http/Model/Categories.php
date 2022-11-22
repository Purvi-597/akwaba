<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'categories';
    protected $fillable = [
        'name','display_name','display_name_fr','status', 'image'
        ];

        protected $dates = ['deleted_at'];

    // public $timestamps = false;
}
