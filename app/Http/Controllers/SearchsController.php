<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SearchsController extends Controller
{

    /**
     * @return
     * @internal param Request $request
     * @internal param $searchText
     * @internal param $query
     */
    public function search()
    {
        $searchText = Input::get('searchText');
        $news = Notice::where('title', 'LIKE', $searchText, 'OR', 'body', 'LIKE', $searchText)->get();
        return $news;
    }
}
