<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Featureplace extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'featured_places_list';
    protected $fillable = [
        'title', 'status', 'image', 'description','featured_places_id', 'ratings'
        ];

        protected $dates = ['deleted_at'];

    public $timestamps = false;
}
