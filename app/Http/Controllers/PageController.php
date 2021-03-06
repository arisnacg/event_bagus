<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
<<<<<<< HEAD
use App\EventType;
=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1

class PageController extends Controller
{
    public function index(){
<<<<<<< HEAD
        return view('index')
            ->with('events',
    		    Event::with('tickets')->orderBy('created_at')->get()
            )->with('event_types', 
                EventType::all()
            );
=======
    	return view('index')->with('events',
    		Event::with('tickets')->orderBy('created_at')->get()
    	);
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
    }

    public function not_found(){
    	return view('404_page');
    }
<<<<<<< HEAD

    public function filter(Request $req){
        $events = Event::with('tickets');
        //mengecek jenis event
        if($req->name)
            $name = $req->name;
            $events->where(function($query) use ($name){
                $query->where('name', 'like', '%'.$name.'%')
                ->orWhere('description', 'like', '%'.$name.'%');
            });
        if($req->event_type_id)
            $events->where('event_type_id', $req->event_type_id);

        $event_types = EventType::all();
        return view('filter')
            ->with('filter', true)
            ->with('name', $req->name)
            ->with('event_type_id', $req->event_type_id)
            ->with('events', $events->get())
            ->with('event_types', $event_types);
    }
=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
}
