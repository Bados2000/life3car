<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CartController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  usluga $usluga
     * @return JsonResponse
     */
    public function store(usluga $usluga): JsonResponse
    {
        return response()->json([
            'status' => 'sukces'
        ]);
    }

}
