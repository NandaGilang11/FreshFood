<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $produks = Produk::where('nama_produk', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $produks = Produk::paginate(9);
        }
        return view('produk.index', compact('produks'));
    }
}
