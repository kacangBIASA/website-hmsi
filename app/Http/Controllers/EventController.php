<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $eventItems = Event::latest('published_at')->paginate(5);
        return view('event.index', compact('eventItems'));
    }

    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }
}
