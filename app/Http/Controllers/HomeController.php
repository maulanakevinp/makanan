<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $menu = Menu::get()->groupBy('kategori_id');
        $tahun = Transaksi::orderBy('tanggal')->get()->groupBy(function($val) {
            return Carbon::parse($val->tanggal)->format('Y');
        });
        return view('index', compact('menu', 'tahun'));
    }
}
