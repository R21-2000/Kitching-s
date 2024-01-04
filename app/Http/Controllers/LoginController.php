<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /**
     * Display the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $iduser = $request->input('iduser');
        $namauser = $request->input('namauser');

        $user = User::where('iduser', $iduser)->where('namauser', $namauser)->first();

        if ($user) {
            auth()->login($user);
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'iduser' => 'ID user atau nama user salah.',
        ]);
    }
}