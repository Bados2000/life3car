<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function index() 
    {

		$userId = Auth::user()->id; //id użytkownika
        $userName = Auth::user()->name; //imię użytkownika
        $userSurname = Auth::user()->surname; //nazwisko użytkownika
		$userPhone = Auth::user()->phone_number; // telefon użytkownika
        $userCarInformation = DB::table('profiles')->join('cars', 'profiles.car_id', '=', 'cars.id_cars')->where('user_id', '=', $userId)->first(); // pobranie informacji o samochodzie użytkownika
        $servicesInCart = session('cart'); //usługi przechowywane w koszyku
		$dateToTitle = date('his-jmy'); //godzina i data użyte do zrobienia nazwy pliku
		$downloadTime = date('h-i-s'); // aktualna godzina
		$downloadDate = date('j-m-Y'); //aktualna data
        $total = 0; //zmienna total użyta w pdf

        

        $fileName = "{$userName} {$userSurname} - {$dateToTitle}.pdf"; // nazwa pliku

    	$pdf = PDF::loadView('sample', compact('userName', 'userSurname','userPhone', 'userCarInformation', 'servicesInCart','downloadDate','total','fileName'));
        
        return $pdf->download($fileName);;
    }
}