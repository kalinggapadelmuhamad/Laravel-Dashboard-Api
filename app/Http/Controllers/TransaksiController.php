<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_menu = 'transaksi';

        $response = Http::asForm()->get('https://example-backend.up.railway.app/api/v1/transaction');
        $responseData = $response->json(); //
        $transaksi = $responseData['data'];

        // dd($transaksi);

        return view('pages.transaksi.transaksi', compact('type_menu', 'transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $type_menu = 'transaksi';

        $response = Http::asForm()->get('https://example-backend.up.railway.app/api/v1/transaction/' . $id);
        $responseData = $response->json(); //
        $transaksi = $responseData['data'];

        dd($responseData);
        return view('pages.transaksi.transaksi', compact('type_menu', 'transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
