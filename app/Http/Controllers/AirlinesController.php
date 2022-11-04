<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;
use Illuminate\Support\Facades\DB;


class AirlinesController extends Controller
{
    public function index()
    {
        $adat = DB::table('airlines')
        ->select('*')
        ->get();
        return view('airlines.index',compact('adat'));
    }
    public function show($re)
    {
        $adat=DB::table('flights')
        ->select('*')
        ->where('airlineid','=',$re)
        ->get();
        return view('airlines.show',compact('adat'));
    }
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
