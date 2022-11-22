<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class License extends Model
{

    // use HasFactory,SoftDeletes;
    protected $table = 'license';
    protected $fillable = [
        'description', 'description_fr'
        ];

}
