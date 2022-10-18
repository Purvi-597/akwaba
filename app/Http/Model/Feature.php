<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'featured_places';
    protected $fillable = [
        'title', 'status', 'image', 'description'
        ];

        protected $dates = ['deleted_at'];

    public $timestamps = false;
}
