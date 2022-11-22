<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CompanyImages extends Model
{
    protected $table = 'company_images';
    protected $fillable = [
        'company_id','image'
        ];

        protected $dates = ['deleted_at'];
}
