<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //

    public function reply()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like()
    {
        return $this->hasMany(Likes::class);
    }
}
