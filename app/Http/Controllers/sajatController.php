<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sajatController extends Controller
{
    public function show($sajatnev)
    {
       
       $post=\DB::table('sajat')->where('sajatnev', $sajatnev)->first();
    
      return view('url', compact('post'));
    }
}
