<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Featuretext extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'featured_text';
    protected $fillable = [
        'title','title_fr','status','description_fr','description'
        ];

        protected $dates = ['deleted_at'];

    //ublic $timestamps = false;
}
