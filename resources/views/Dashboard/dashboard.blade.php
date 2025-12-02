<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Aset Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-100 via-white to-slate-200 min-h-screen p-8">

<div class="max-w-7xl mx-auto">

    <h1 class="text-5xl font-bold mb-10 text-slate-800 drop-shadow-sm">Dashboard Manajemen Aset</h1>

    <!-- Statistik Card -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mb-12">

        <!-- Barang -->
        <a href="{{ route('barang.index') }}" class="block">
            <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg 
                        hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200">
                <div class="flex items-center justify-between">
                    <span class="text-slate-500 text-sm">Barang</span>
                    <span class="text-slate-400 text-3xl">📦</span>
                </div>
                <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalBarang }}</p>
            </div>
        </a>

        <!-- Kategori -->
        <a href="{{ route('kategori.index') }}" class="block">
            <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg 
                        hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200">
                <div class="flex items-center justify-between">
                    <span class="text-slate-500 text-sm">Kategori</span>
                    <span class="text-slate-400 text-3xl">🗂️</span>
                </div>
                <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalKategori }}</p>
            </div>
        </a>

        <!-- Ruangan -->
        <a href="{{ route('ruangan.index') }}" class="block">
            <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg 
                        hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200">
                <div class="flex items-center justify-between">
                    <span class="text-slate-500 text-sm">Ruangan</span>
                    <span class="text-slate-400 text-3xl">🏠</span>
                </div>
                <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalRuangan }}</p>
            </div>
        </a>

        <!-- Bangunan -->
        <a href="{{ route('bangunan.index') }}" class="block">
            <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg 
                        hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200">
                <div class="flex items-center justify-between">
                    <span class="text-slate-500 text-sm">Bangunan</span>
                    <span class="text-slate-400 text-3xl">🏛️</span>
                </div>
                <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalBangunan }}</p>
            </div>
        </a>

        <!-- Tanah -->
        <a href="{{ route('tanah.index') }}" class="block">
            <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg 
                        hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200">
                <div class="flex items-center justify-between">
                    <span class="text-slate-500 text-sm">Tanah</span>
                    <span class="text-slate-400 text-3xl">🌱</span>
                </div>
                <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalTanah }}</p>
            </div>
        </a>

    </div>

    <!-- Ringkasan Barang per Kategori -->
    <div class="bg-white/70 backdrop-blur-md rounded-3xl p-8 shadow-xl border border-slate-200 mb-10">
        <h2 class="text-3xl font-semibold mb-5 text-slate-800">Ringkasan Barang per Kategori</h2>

        @foreach ($barangPerKategori as $kat)
            <a href="{{ route('kategori.show', $kat->id) }}" class="block">
                <div class="flex justify-between py-3 border-b border-slate-200 text-slate-700 
                            hover:bg-slate-100 rounded-lg px-2 transition">
                    <span>{{ $kat->nama_kategori }}</span>
                    <strong>{{ $kat->barang_count }} barang</strong>
                </div>
            </a>
        @endforeach
    </div>

    <!-- Ringkasan Barang per Ruangan -->
    <div class="bg-white/70 backdrop-blur-md rounded-3xl p-8 shadow-xl border border-slate-200 mb-10">
        <h2 class="text-3xl font-semibold mb-5 text-slate-800">Ringkasan Barang per Ruangan</h2>

        @foreach ($barangPerRuangan as $r)
            <a href="{{ route('ruangan.show', $r->id) }}" class="block">
                <div class="flex justify-between py-3 border-b border-slate-200 text-slate-700 
                            hover:bg-slate-100 rounded-lg px-2 transition">
                    <span>{{ $r->nama_ruangan }}</span>
                    <strong>{{ $r->barang_count }} barang</strong>
                </div>
            </a>
        @endforeach
    </div>

</div>

</body>
</html>
