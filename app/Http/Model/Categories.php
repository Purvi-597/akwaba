<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name', 'status', 'image'
        ];
}
