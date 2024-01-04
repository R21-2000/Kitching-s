<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('iduser', 'namauser');

        $user = User::where('iduser', $credentials['iduser'])
            ->where('namauser', $credentials['namauser'])
            ->first();

        if ($user) {
            Auth::login($user);

            // Set level user
            $request->session()->put('level', $user->level);

            return redirect('/');
            if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            if(Auth::user()->roles == 'admin')
            {
                return redirect()->route('dashboard-admin');
            }
            if(Auth::user()->roles == 'waiter')
            {
                return redirect()->route('dashboard-waiter');
            }
            if(Auth::user()->roles == 'kasir')
            {
                return redirect()->route('dashboard-kasir');
            }
        }
        } else {
            return redirect('/login')->withErrors(['credentials' => 'Id atau Nama Typo nih.']);
        }
    }
}
