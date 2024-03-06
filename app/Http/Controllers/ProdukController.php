<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_menu = 'product';

        $response = Http::asForm()->get('https://example-backend.up.railway.app/api/v1/product');
        $responseData = $response->json(); //
        $product = $responseData['data'];

        return view('pages.product.product', compact('type_menu', 'product'));
    }

    public function create()
    {
        $type_menu = 'product';
        return view('pages.product.createProduct', compact('type_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'codeBarang' => 'required',
            'namaBarang' => 'required',
            'tipeBarang' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'deskripsi' => 'required',
        ]);

        $response = Http::asForm()->post('https://example-backend.up.railway.app/api/v1/product', [
            'kodebarang' => $request->codeBarang,
            'namabarang' => $request->namaBarang,
            'image' => $request->image1,
            'image2' => $request->image2,
            'image3' => $request->image3,
            'typebarang' => $request->tipeBarang,
            'deskripsibarang' => $request->deskripsi,
            'stockbarang' => $request->stock,
            'price' => $request->price
        ]);

        if ($response->status() === 201) {
            return Redirect::route('product.index')->with('success', 'Product Berhasil Di Tambah');
        } else {
            return Redirect::route('login.index')->with('error', 'Product Gagal Di Tambah');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $type_menu = 'product';

        $response = Http::asForm()->get('https://example-backend.up.railway.app/api/v1/product/' . $id);
        $responseData = $response->json(); //
        $detailProduct = $responseData['data'];

        return view('pages.product.detailProduct', compact('type_menu', 'detailProduct'));
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
