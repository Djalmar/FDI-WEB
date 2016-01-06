<?php

namespace App\Http\Controllers;

use App\Event;
use App\Notice;
use App\Picture;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchesController extends Controller
{
    /**
     * @return array
     * @internal param Request $request
     * @internal param $searchText
     * @internal param $query
     */
    public function search()
    {
        $searchText = Input::get('searchText');
        $news = Notice::where('title', 'LIKE', "%$searchText%")
            ->orWhere('body', 'LIKE', "%$searchText%")->get();
        $events = Event::where('title', 'LIKE', "%$searchText%")
            ->orWhere('body', 'LIKE', "%$searchText%")->get();
        $images = Picture::where('name', 'LIKE', "%$searchText%")
            ->orWhere('description', 'LIKE', "%$searchText%")->get();
        return view('searches.index', compact('news', 'events', 'images'));
    }
}
