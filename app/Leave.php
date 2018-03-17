<?php

namespace App;

class Leave extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
