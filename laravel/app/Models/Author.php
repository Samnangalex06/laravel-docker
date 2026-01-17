<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function articles(){
        return $this->HasMany(article::class);
    }
    public function comments(){
        return $this->morphMany(comments::class, 'commentable');
    }
    public function audiences(){
        return $this->hasManyThrough(Audiences::class);
    }

}
