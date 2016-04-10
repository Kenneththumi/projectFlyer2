<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table='flyersPhotos';

    Protected $fillable=['photos'];

    public function flyer(){
        return $this->belongsTo('App\Flyer');
    }

}
