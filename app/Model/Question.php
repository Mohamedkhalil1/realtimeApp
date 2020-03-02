<?php

namespace App\Model;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    public function getRouteKeyName(){
        return 'slug';
    }

    protected $guarded =[];
    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute()
    {
        return asset("api/question/".$this->slug);
    }
}
