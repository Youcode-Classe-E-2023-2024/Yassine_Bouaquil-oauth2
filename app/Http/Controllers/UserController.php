<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/users');
        return $response->json();
    }

    public function store(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/users', $request->all());
        return $response->json();
    }

    public function show($userId)
    {
        $response = Http::get('http://127.0.0.1:8000/users/'.$userId);
        return $response->json();
    }

    public function update(Request $request, $userId)
    {
        $response = Http::put('http://127.0.0.1:8000/users/'.$userId, $request->all());
        return $response->json();
    }

    public function destroy($userId)
    {
        $response = Http::delete('http://127.0.0.1:8000/users/'.$userId);
        return $response->json();
    }
}
