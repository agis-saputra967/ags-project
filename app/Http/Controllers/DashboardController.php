<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Ruangan;
use App\Models\Bangunan;
use App\Models\Tanah;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik utama
        $totalBarang     = Barang::count();
        $totalKategori   = Kategori::count();
        $totalRuangan    = Ruangan::count();
        $totalBangunan   = Bangunan::count();
        $totalTanah      = Tanah::count();

        // Contoh ringkasan
        $barangPerKategori = Kategori::withCount('barang')->get();
        $barangPerRuangan  = Ruangan::withCount('barang')->get();

        return view('Dashboard.dashboard', [
            'totalBarang'        => $totalBarang,
            'totalKategori'      => $totalKategori,
            'totalRuangan'       => $totalRuangan,
            'totalBangunan'      => $totalBangunan,
            'totalTanah'         => $totalTanah,
            'barangPerKategori'  => $barangPerKategori,
            'barangPerRuangan'   => $barangPerRuangan,
        ]);
    }
}
