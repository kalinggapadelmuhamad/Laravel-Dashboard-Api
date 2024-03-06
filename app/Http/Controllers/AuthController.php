<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.auth.auth-login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $response = Http::asForm()->post('https://example-backend.up.railway.app/api/v1/loginadmin', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Cek apakah permintaan berhasil (status code 200)
        if ($response->status() === 201) {
            // Lakukan sesuatu dengan respons dari API
            $responseData = $response->json(); // Jika respons adalah JSON
            $request->session()->put('user', $responseData);
            // Lakukan sesuatu dengan $responseData
            return Redirect::route('home');
        } else {
            return Redirect::route('login.index')->with('error', 'Gagal melakukan login email atau password salah');
        }
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
