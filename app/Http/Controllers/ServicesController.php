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

    function edit($id)
    {
      $data = uslugi::find($id);
      return view('edit', ['data'=>$data]);
    }

    function delete($id)
    {
      $data = uslugi::find($id);
      $data->delete();
      $data = uslugi::all();
      return view ('services.index', ['uslugi'=>$data]);
    }
    
    function update(Request $req)
    {
        $data = uslugi::find($req->id);
        $data -> typ_uslugi=$req->typ_uslugi;
        $data -> nazwa_uslugi=$req->nazwa_uslugi;
        $data -> czas_realizacji=$req->czas_realizacji;
        $data -> cena_brutto=$req->cena_brutto;
        $data -> save();
        $data = uslugi::all();
        return view ('services.index', ['uslugi'=>$data]);
    }

    function add(Request $req)
    {
        $data = new uslugi;
        $data -> typ_uslugi=$req->typ_uslugi;
        $data -> nazwa_uslugi=$req->nazwa_uslugi;
        $data -> czas_realizacji=$req->czas_realizacji;
        $data -> cena_brutto=$req->cena_brutto;
        $data -> save();
        $data = uslugi::all();
        return view ('services.index', ['uslugi'=>$data]);
    }

}
