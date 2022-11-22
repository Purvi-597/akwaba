<?php


namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Users extends Model
{
    use HasFactory,SoftDeletes;

	public $table = 'users';
    protected $fillable = [
       'first_name','last_name','email','password','contact_no','role','home_address','work_address','mycar_id','profile_pic','device_type','device_token','remember_token','status'
    ];

    protected $hidden = [
        'updated_at', 'deleted_at'
    ];
  
}

