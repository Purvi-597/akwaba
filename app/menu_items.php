<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class menu_items extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'menu_items';
}
