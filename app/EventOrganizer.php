<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class EventOrganizer extends Authenticable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eo_name', 'eo_email', 'password',
    ];

    public function members(){
        return $this->hasMany('App\EventOrganizerMember');
    }

    public function events(){
        return $this->hasMany('App\Event');
    }

    public function eoFriend(){
        return $this->hasMany('App\Friend', 'event_organizer_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
