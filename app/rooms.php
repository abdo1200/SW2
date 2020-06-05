<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    protected $fillable = [
        'id', 'type', 'status'
    ];
    public function reservations(){
        return $this->hasMany('App\reservation');
    }
}
