<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uslugi;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{


    function index()
    {
        return view('services.index', [
            'uslugi' => uslugi::paginate(10)
        ]);
    }

    function find(Request $request){

        $request->validate([
            'query'=>'required|min:2'
        ]);

        $search_text = $request->input('query');
        $countries = DB::table('uslugi')
            ->where('typ_uslugi','LIKE','%'.$search_text.'%')
            ->orWhere('nazwa_uslugi','LIKE','%'.$search_text.'%')
            ->paginate(1000000);
        return view('services.index',['uslugi'=>$countries]);

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
      return redirect('/services/list');
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
        return redirect('/services/list');
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
        return redirect('/services/list');
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $uslugi = uslugi::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nazwa_uslugi" => $uslugi->nazwa_uslugi,
                "quantity" => 1,
                "cena_brutto" => $uslugi->cena_brutto,

            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Pomyslnie dodano usługę!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update2(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Koszyk zaktualizowany');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove2(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Usługa usunięta');
        }
    }

}
