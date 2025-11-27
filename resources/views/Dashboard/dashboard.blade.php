@extends('layouts.app')

@section('title', 'Dashboard Aset')

@section('content')

<style>
    .glass {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 18px;
        padding: 22px;
        transition: .3s;
    }
    .glass:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 35px rgba(0,0,0,0.15);
    }
    .stat-box {
        padding: 18px;
        border-radius: 14px;
        background: #f8fafc;
        text-align: center;
        transition: .2s;
    }
    .stat-box:hover {
        background: #e2e8f0;
    }
</style>

<div class="container mx-auto mt-10">

    <h1 class="text-3xl font-bold mb-8">Dashboard Sistem Informasi Manajemen Aset</h1>

    <!-- Statistik Utama -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-10">

        <div class="stat-box shadow">
            <h2 class="text-xl font-semibold">Barang</h2>
            <p class="text-3xl font-bold">{{ $totalBarang }}</p>
        </div>

        <div class="stat-box shadow">
            <h2 class="text-xl font-semibold">Kategori</h2>
            <p class="text-3xl font-bold">{{ $totalKategori }}</p>
        </div>

        <div class="stat-box shadow">
            <h2 class="text-xl font-semibold">Ruangan</h2>
            <p class="text-3xl font-bold">{{ $totalRuangan }}</p>
        </div>

        <div class="stat-box shadow">
            <h2 class="text-xl font-semibold">Bangunan</h2>
            <p class="text-3xl font-bold">{{ $totalBangunan }}</p>
        </div>

        <div class="stat-box shadow">
            <h2 class="text-xl font-semibold">Tanah</h2>
            <p class="text-3xl font-bold">{{ $totalTanah }}</p>
        </div>
    </div>

    <!-- Ringkasan Barang per Kategori -->
    <div class="glass shadow mb-8">
        <h2 class="text-2xl font-semibold mb-4">Ringkasan Barang per Kategori</h2>

        @foreach ($barangPerKategori as $kat)
            <div class="flex justify-between border-b py-2">
                <span>{{ $kat->nama_kategori }}</span>
                <strong>{{ $kat->barang_count }} barang</strong>
            </div>
        @endforeach
    </div>

    <!-- Ringkasan Barang per Ruangan -->
    <div class="glass shadow mb-8">
        <h2 class="text-2xl font-semibold mb-4">Ringkasan Barang per Ruangan</h2>

        @foreach ($barangPerRuangan as $r)
            <div class="flex justify-between border-b py-2">
                <span>{{ $r->nama_ruangan }}</span>
                <strong>{{ $r->barang_count }} barang</strong>
            </div>
        @endforeach
    </div>

</div>

@endsection
