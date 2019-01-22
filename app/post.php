<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
/*public function posts(){
return $this->hasMany('App\User');
}*/

public $table = "post";
 protected $fillable = [
        'text', 'title','id','date_desc'
    ];
}
