<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewRequest;
use App\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::guest()) {
            $notices = Notice::where('published', '<=', Carbon::now(), 'AND', 'expiration', '>=', Carbon::now())->get();
        } else {
            $notices = Notice::get();
        }
        return view('news.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|NewRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request)
    {
        $new = new Notice($request->all());
        $new->save();
        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param Notice $notice
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Notice $notice)
    {
        return view('news.notice', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Notice $notice
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Notice $notice)
    {
        return view('news.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewRequest|Request $request
     * @param Notice $notice
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(NewRequest $request, Notice $notice)
    {
        $notice->update($request->all());
        Session::flash('flash_message', 'Se edito correctamente la noticia!');
        return redirect('/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Notice $notice
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Notice $notice)
    {
        $notice->delete();
        Session::flash('flash_message', 'Se elimino correctamente la noticia!');
        return redirect('/news');
    }
}
