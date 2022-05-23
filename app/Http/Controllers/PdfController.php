<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index() 
    {
    	$pdf = PDF::loadView('sample', [
    		'title' => 'CodeAndDeploy.com Laravel Pdf Tutorial',
    		'description' => 'This is an example Laravel pdf tutorial.',
    		'footer' => 'by <a href="https://codeanddeploy.com">codeanddeploy.com</a>'
    	]);
    
        return $pdf->download('sample.pdf');
    }
}