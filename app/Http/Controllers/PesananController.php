<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:waiter');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::all();

        return view('pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $pelanggan = Pelanggan::all();

        return view('pesanan.create', compact('menus', 'pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idmenus' => 'required',
            'idpelanggan' => 'required',
            'jumlah' => 'required',
        ]);

        $pesanan = new Pesanan();
        $pesanan->idmenus = $request->input('idmenus');
        $pesanan->idpelanggan = $request->input('idpelanggan');
        $pesanan->jumlah = $request->input('jumlah');
        $pesanan->iduser = Auth::id();

        $pesanan->save();

        return redirect()->route('pesanan.index');
    }
}
