<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    //エリア検索ページ
    public function area_search()
    {
        return view('area.search_area');
    }

    
}


?>