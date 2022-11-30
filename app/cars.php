<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = ['car_name','car_model','car_year','car_transmission','car_fuel'];

}
