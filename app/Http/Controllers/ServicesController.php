<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uslugi;

class ServicesController extends Controller
{
    function show()
    {
       // return uslugi::all();
       $data = uslugi::all();
       return view ('services.index', ['uslugi'=>$data]);
       
    }
}
