<?php

namespace App\Model;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        $this->belongsTo(Question::class);
    }
    
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function like()
    {
        $this->hasMany(Like::class);
    }

}
