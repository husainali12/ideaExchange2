<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    public function question(){
        return $this->belongsTo(Question::class);
    }
    public function expert(){
        return $this->belongsTo(Expert::class);
    }
    public function upvotes(){
        return $this->hasMany(UpVote::class);
    }
}
