<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = ['date'];

    protected $fillable = [
        'date', 'address', 'description','posted', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function isPostedAsText() : string
    {
        return $this->posted ? 'yes' : 'no';
    } 
}
