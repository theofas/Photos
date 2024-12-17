<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjoutController extends Controller
{
    function ajout() {
        

        return view("ajout");
    }

    function store(Request $request){
       $titre = $request -> input('titre');
       $url = $request -> input('url');
       $album = $request -> input('albumid');
       $v = env('APP_URL') . 'storage/' . $request->file('url')->store();
       DB::insert('insert into photos (titre, url, album_id) values (?, ?, ?)', [$titre, $v, $album]);
        return redirect('')
    }
}
