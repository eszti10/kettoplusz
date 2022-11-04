<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function postcreate()
    {
        return view("city.create");
    }
    public function store(Request $request)
    {

        $s = new City();
        $s->name = request('name');
        $s->save();
        return view("welcome");
    }
}
