<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Privacy_Policy extends Model
{

    // use HasFactory,SoftDeletes;
    protected $table = 'privacy_policy';
    protected $fillable = [
        'description', 'description_fr'
        ];

}
