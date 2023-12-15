<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('checkout.index',[
            'title'     => 'Checkout',
            'active'    => 'checkout',
            'checkouts' => Checkout::all(),
            'produks'   => Produk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah' => 'required|max:255',
            'pelanggan' => 'required|max:255',
            'produk_id' => 'required',
        ]);

        $stockproduk = Produk::find($request->produk_id);

        if($stockproduk->stock < $request->jumlah)
        {
            return redirect('/checkout')->with('status', 'Mohon maaf, Stock produk tidak mencukupi');
        }else
        {
            $stockproduk->stock -= $request->jumlah;
            $stockproduk->save();
        }

        Checkout::create($validatedData);

        return redirect('/checkout')->with('status', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
