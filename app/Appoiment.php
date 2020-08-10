<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appoiment extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function petInformation() {
        return $this->belongsToMany('App\PetInformation','medicalRecord',
            'appoiment_id','pet_id')->withPivot("pivot_hour");
    }
}
