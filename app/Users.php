<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	public $table = 'users';
    protected $fillable = [
       'name','email','email_verified_at','password','mobile','state','city','location','profile_picture','profile_picture_path','verification_code','device_type','device_token','remember_token','sso','address','zipcode','user_email','user_sms','user_push','gender','age','dateofbirth','about_me','zodiac','education','height','created_at','updated_at'
    ];

  
}

