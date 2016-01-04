<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::guest()) {
            $events = Event::where('published', '<=', Carbon::now(), 'AND', 'execute', '>=', Carbon::now())->get();
        } else {
            $events = Event::get();
        }
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|EventRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $new = new Event($request->all());
        $new->save();
        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return \Illuminate\Http\Response
     * @internal param Event $Event
     * @internal param int $id
     */
    public function show(Event $event)
    {
        return view('events.event', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return \Illuminate\Http\Response
     * @internal param Event $Event
     * @internal param int $id
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventRequest|Request $request
     * @param Event $event
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(EventRequest $request, Event $event)
    {
        $event->update($request->all());
        Session::flash('flash_message', 'Se edito correctamente el evento!');
        return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @internal param Event $Event
     * @internal param int $id
     */
    public function destroy(Event $event)
    {
        $event->delete();
        Session::flash('flash_message', 'Se elimino correctamente el evento!');
        return redirect('/events');
    }
}
