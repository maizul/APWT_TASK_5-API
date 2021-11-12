<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class apiController extends Controller
{
    //
     function listAPI()
    {
        $events = event::all();
        return $events;
    }
     function postAPI(Request $req){
        $events = new Event();
        $events -> name = $req->name;
        $events -> price = $req->price;
        $events -> startdate = $req->startdate;
        $events -> enddate = $req->enddate;
        $events -> deadline = $req->deadline;
        $events -> shortdesc = $req->shortdesc;
        $events -> desc = $req->desc;
        $events -> image = $req->image;
        $events -> agentId = $req->agentId;
        $events->save();
        return ["Insertion Successful!!!"];
    }
}
