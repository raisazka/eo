<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventOrganizerMember extends Model
{
    public function eventOrganizer()
    {
        return $this->belongsTo('App\EventOrganizer');
    }
}
