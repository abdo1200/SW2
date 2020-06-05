<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $fillable = [
        'id', 'user_name', 'user_phonenumber','roomtype','mealplan','user_id','rooms_id','checkin','checkout'
    ];
    public function user(){
        return $this->belongsTo('App\user');
    }
    public function room(){
        return $this->belongsTo('App\rooms');
    }
}
