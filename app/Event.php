<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function venues()
    {
        return $this->belongsTo('App\Venue', 'venue_id');
    }

    public function eventOrganizers()
    {
        return $this->belongsTo('App\EventOrganizer');
    }

    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function eventType(){
        return $this->belongsTo('App\EventType', 'event_type_id');
    }
}
