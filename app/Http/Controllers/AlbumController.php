<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    function albums(){
        return view("albums");
    }

    function tags($tag){
        $monTag = DB::select("select * From tags where nom=?", [$tag]);
        $idTag = $monTag[0]->id;

        $photostags = DB::select("select * from possede_tag inner join photos on possede_tag.photo_id = photos.id
        where tag_id = ?", [$idTag]);


        return view("photos", ["phototags" => $photostags]);
    }

    function photosalbum($id){
       
        $photos = DB::select("select * from photo where album_id = ?", [$id]);


        return view("photos", ["phototags" => $photos]);
    }



}
