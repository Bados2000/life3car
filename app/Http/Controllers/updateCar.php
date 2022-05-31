<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class updateCar extends Controller
{
    public function showw(){
        return view('updateCar');
    }

    public function updatee(Request $request)
    {
            $marka = $request->marka;
            $model = $request->model;
            $generacja = $request->generacja;
         DB::table('cars')->insert([
            
            'marka' => $marka,
            'model' =>$model,
            'generacja' =>$generacja,
            ]);
 
        return redirect()->route('profile');
    }
}
