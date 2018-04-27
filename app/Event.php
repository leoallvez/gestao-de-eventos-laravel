<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = ['date'];

    protected $fillable = [
        'date', 'address', 'description', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
