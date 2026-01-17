<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    //
    protected $fillable = ['name'];

    
    public function User(){
        return $this->belongsToMany(User::class);
    }
    public function Permission(){
        return $this->belongsToMany(Permission::class);
    }

}
