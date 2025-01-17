<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'no_hp' => ['required', 'numeric'],
            'tanggal_lahir' => ['required', 'date'],
            'alamat' => ['required'],
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return to_route('login')->with('success', 'Your account has been created.');
    }
}
