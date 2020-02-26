<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
     protected $fillable=[
		'title','user_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

     public function emaillists(){

    	return $this->hasMany(Emaillist::class);
    }
}
