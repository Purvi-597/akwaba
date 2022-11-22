<?php

namespace App;
namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Company extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'company';
    protected $fillable = [
        'user_id','name','area_of_activity', 'address',
        'phone_number','phone_number_comment',
        'website','opening_hours','latitude',
        'longtitude', 'status'
        ];

        protected $dates = ['deleted_at'];
}
