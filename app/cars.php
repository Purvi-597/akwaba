<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;
    protected $table = 'cars';
<<<<<<< HEAD
    protected $fillable = ['car_name','car_model','car_year','car_transmission','car_fuel'];
=======
>>>>>>> 39d9f2bb85a4b2f396fe243e601b55b6c5e31db2
}
