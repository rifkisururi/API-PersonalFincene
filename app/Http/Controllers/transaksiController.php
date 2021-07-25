<?php

namespace App\Http\Controllers;

use App\Models\Transaksi_model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Http\Request as HttpRequest;

class kategoriController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        $data = DB::table('transaksi')->get();
        return response()->json([
            'data' => $data,
            'status' => true
        ], 200);
    }

    public function add(Request $request)
    {
        $data = new Transaksi_model;
        $data->tanggal = $request->tanggal;
        $data->id_kategori = $request->id_kategori;
        $data->jumlah = $request->jumlah;
        $data->id_parent = 0;

        $data->save();
    }
}
