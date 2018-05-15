<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    protected $fillable = [
    	'id',
    	'user_id',
<<<<<<< HEAD
		'type',
		'content',
    	'status'
    ];

	protected $dates = ['created_at', 'updated_at'];
	
=======
    	'ticket_id',
    	'type',
    	'status'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function ticket(){
    	return $this->belongsTo(Ticket::class, 'ticket_id');
    }
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
}
