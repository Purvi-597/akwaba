<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategories extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'sub_categories';
    protected $fillable = [
        'name','display_name','display_name_fr','status', 'image', 'cat_id'
        ];

        protected $dates = ['deleted_at'];

   // public $timestamps = false;
}
