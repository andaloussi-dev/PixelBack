<?php

namespace App\Issue;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
        'title', 'content', 'status','user_id'
    ];
    
    public function user(){
        return $this->belongsTo('App\user');
    }
}
