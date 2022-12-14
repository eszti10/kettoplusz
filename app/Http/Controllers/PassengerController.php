<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;
use Illuminate\Support\Facades\DB;

class PassengerController extends Controller
{
    public function show($id)
    {
        $adat=DB::table('passengers')
        ->select('*')
        ->where('flightid','=',$id)
        ->get();
        return view('passenger.show',compact('adat'));
    }
    public function create()
    {
        $adat=DB::table('flights')
        ->select('*')
        ->get();
        return view('passenger.create',compact('adat'));
    }

    public function store(Request $request)
    {

        $s = new Passenger();
        $s->name = request('name');
        $s->peresonalid = request('szemszam');
        $s->bday = request('szuldat');
        $s->flightid = request('repid');
        $s->save();
        return view("welcome");
    }

}
