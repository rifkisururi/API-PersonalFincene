<?php

namespace App\Http\Controllers;

use App\Models\Dompet_model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Http\Request as HttpRequest;

class dompetController extends Controller
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
        $dompet = DB::table('dompet')->get();
        return response()->json([
            'data' => $dompet,
            'status' => true
        ], 200);
    }

    public function addDompet(Request $request)
    {
        $dompet = new Dompet_model;
        $dompet->nama_dompet = $request->name;
        $dompet->nama_bank = $request->bank;
        $dompet->saldo = 0;
        $dompet->nomor_rekening = $request->nomor_rekening;

        $dompet->save();

        return response()->json([
            'data' => $dompet,
            'status' => true
        ], 200);
    }
}
