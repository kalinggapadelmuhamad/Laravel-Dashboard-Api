<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_menu = 'user';

        $response = Http::asForm()->get('https://example-backend.up.railway.app/api/v1/users');
        $responseData = $response->json(); //
        $users = $responseData['data'];

        return view('pages.users.users', compact('type_menu', 'users'));
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
        $type_menu = 'user';

        $response = Http::asForm()->get('https://example-backend.up.railway.app/api/v1/users/' . $id);
        $responseData = $response->json(); //
        $users = $responseData['data'];

        return view('pages.users.detailUsers', compact('type_menu', 'users'));
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
