<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    
    // Primary Key
    public $primaryKey = 'id';

    // Timestams
    public $timestamp = true;

    
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    /*
    public function user(){
        return $this->belongsTo(User::class);
    }
    */
}


