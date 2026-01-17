<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permision extends Model
{
    //
    protected $fillable = ['name'];

    public function Role(){
        return $this->belongsToMany(Role::class);
    }
}
