<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function users(){
        return $this->morphedByMany(User::class, 'user_interest');
    }
    public function experts(){
        return $this->morphedByMany(Expert::class, 'user_interest');
    }
}
