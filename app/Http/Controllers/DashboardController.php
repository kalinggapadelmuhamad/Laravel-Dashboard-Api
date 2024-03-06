<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::asForm()->get('https://example-backend.up.railway.app/api/v1/users');
        $responseData = $response->json(); //
        $user = $responseData['data'];

        $response = Http::asForm()->get('https://example-backend.up.railway.app/api/v1/product');
        $responseData = $response->json(); //
        $product = $responseData['data'];

        $responset = Http::asForm()->get('https://example-backend.up.railway.app/api/v1/transaction');
        $responseDatat = $responset->json(); //
        $transaksi = $responseDatat['data'];

        $type_menu = 'dashboard';
        return view('pages.dashboard.dashboard', compact('type_menu', 'product', 'transaksi', 'user'));
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
        //
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
