<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:kasir');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();

        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesanan = Pesanan::all();

        return view('transaksi.create', compact('pesanan'));
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
            'idpesanan' => 'required',
            'total' => 'required',
            'bayar' => 'required',
        ]);

        $transaksi = new Transaksi();
        $transaksi->idpesanan = $request->input('idpesanan');
        $transaksi->total = $request->input('total');
        $transaksi->bayar = $request->input('bayar');

        $transaksi->save();

        Pesanan::find($request->input('idpesanan'))->update(['status' => 'terbayar']);

        return redirect()->route('transaksi.index');
    }
}