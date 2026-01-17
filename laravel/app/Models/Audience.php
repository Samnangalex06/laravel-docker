<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    //
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function comments(){
        return $this->morphMany(Comment::class);
    }
}
