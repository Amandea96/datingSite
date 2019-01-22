<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class msg extends Model
{public $table = "msg";
     protected $fillable = [
       'message','sender', 'receiver', 'date_msg'];
	   
	     protected $hidden = [
         'remember_token',
    ];
}
