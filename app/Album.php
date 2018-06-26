<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable = array('name', 'location', 'description', 'cover_image', 'brochure');
    
    public function photos(){
        return $this->hasMany('App\Photo');
    }
}
