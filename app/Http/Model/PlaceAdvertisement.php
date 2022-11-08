<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceAdvertisement extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'place_advertisement';
    protected $fillable = [
        'place_name', 'image', 'type', 'external_link', 'osm_id','status'
        ];

        protected $dates = ['deleted_at'];

    public $timestamps = false;
}
