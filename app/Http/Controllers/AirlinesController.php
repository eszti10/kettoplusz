<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;

class AirlinesController extends Controller
{
    public function postcreate()
    {
        return view("airlines.create");
    }
    public function store(Request $request)
    {
        //echo "<script> alert('Hello');</script>";
        $s = new Airline();
        $s->name = request('name');
        $s->origin = request('origin');
        $s->save();
        return view("welcome");
        /*
        Airline::create(
            [
                'name' => request("name"),
                'origin'=> request("origin")
            ]
            );
        */




    }
}
