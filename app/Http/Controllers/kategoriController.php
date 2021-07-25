<?php

namespace App\Http\Controllers;

use App\Models\Kategori_model;
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
        $kategori = DB::table('kategori')->get();
        return response()->json([
            'data' => $kategori,
            'status' => true
        ], 200);
    }

    public function add(Request $request)
    {
        $data = new Kategori_model;
        $data->jenis = $request->jenis;
        $data->nama = $request->nama;
        $data->icon = "";
        $data->id_parent = 0;

        $data->save();

        return response()->json([
            'data' => $data,
            'status' => true
        ], 200);
    }
}
