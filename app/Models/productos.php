<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = 'posts';
    public function user(){
        return $this->belongTo('App\User', 'user_id');
    }
}
