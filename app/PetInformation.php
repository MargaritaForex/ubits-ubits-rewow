<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetInformation extends Model
{
    public function  petType() {
        return $this->hasOne('App\Pet', 'id','pets_id');
    }

    public function appoinmets() {
        return $this->belongsToMany('App\Appoiment','medicalRecord',
            'appoiment_id','pet_id');
    }

}
