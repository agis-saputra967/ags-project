<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><div class="flex justify-between items-center mb-10">
    <h1 class="text-4xl font-bold text-slate-800">Dashboard Aset</h1>
    <div class="flex items-center space-x-3 bg-white px-4 py-2 rounded-2xl shadow border border-slate-200">
        <img src="https://ui-avatars.com/api/?name=User&background=0D8ABC&color=fff&size=60" class="w-12 h-12 rounded-full shadow" alt="Avatar User">
        <div>
            <p class="text-slate-800 font-semibold">{{ Auth::user()->name ?? 'User' }}</p>
            <p class="text-slate-500 text-sm">Administrator</p>
        </div>
    </div>
</div> Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .glass {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-100 to-slate-300 min-h-screen flex">

    <div class="max-w-7xl mx-auto">

        <h1 class="text-5xl font-bold mb-10 text-slate-800 drop-shadow-sm">Dashboard Manajemen Aset</h1>

        <!-- Statistik Card -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mb-12">

    <a href="{{ route('barang.index') }}" class="block">
        <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200 cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="text-slate-500 text-sm">Barang</span>
                <span class="text-slate-400 text-3xl">📦</span>
            </div>
            <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalBarang }}</p>
        </div>
    </a>

    <a href="{{ route('kategori.index') }}" class="block">
        <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200 cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="text-slate-500 text-sm">Kategori</span>
                <span class="text-slate-400 text-3xl">🗂️</span>
            </div>
            <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalKategori }}</p>
        </div>
    </a>

    <a href="{{ route('ruangan.index') }}" class="block">
        <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200 cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="text-slate-500 text-sm">Ruangan</span>
                <span class="text-slate-400 text-3xl">🏠</span>
            </div>
            <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalRuangan }}</p>
        </div>
    </a>

    <a href="{{ route('bangunan.index') }}" class="block">
        <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200 cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="text-slate-500 text-sm">Bangunan</span>
                <span class="text-slate-400 text-3xl">🏛️</span>
            </div>
            <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalBangunan }}</p>
        </div>
    </a>

    <a href="{{ route('tanah.index') }}" class="block">
        <div class="p-6 rounded-3xl bg-gradient-to-br from-white to-slate-50 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1 border border-slate-200 cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="text-slate-500 text-sm">Tanah</span>
                <span class="text-slate-400 text-3xl">🌱</span>
            </div>
            <p class="text-5xl font-extrabold text-slate-900 mt-1">{{ $totalTanah }}</p>
        </div>
    </a>

</div>


        <!-- Statistik Cards Modern -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
            <a href="{{ route('barang.index') }}" class="block">
                <div class="glass p-6 rounded-3xl shadow-xl hover:shadow-2xl transition transform hover:-translate-y-1">
                    <div class="flex justify-between text-lg"><span>Barang</span><span>📦</span></div>
                    <p class="text-4xl font-extrabold mt-1 text-slate-900">{{ $totalBarang }}</p>
                </div>
            </a>

            <a href="{{ route('kategori.index') }}" class="block">
                <div class="glass p-6 rounded-3xl shadow-xl hover:shadow-2xl transition transform hover:-translate-y-1">
                    <div class="flex justify-between text-lg"><span>Kategori</span><span>🗂️</span></div>
                    <p class="text-4xl font-extrabold mt-1 text-slate-900">{{ $totalKategori }}</p>
                </div>
            </a>

            <a href="{{ route('ruangan.index') }}" class="block">
                <div class="glass p-6 rounded-3xl shadow-xl hover:shadow-2xl transition transform hover:-translate-y-1">
                    <div class="flex justify-between text-lg"><span>Ruangan</span><span>🏠</span></div>
                    <p class="text-4xl font-extrabold mt-1 text-slate-900">{{ $totalRuangan }}</p>
                </div>
            </a>

            <a href="{{ route('bangunan.index') }}" class="block">
                <div class="glass p-6 rounded-3xl shadow-xl hover:shadow-2xl transition transform hover:-translate-y-1">
                    <div class="flex justify-between text-lg"><span>Bangunan</span><span>🏛️</span></div>
                    <p class="text-4xl font-extrabold mt-1 text-slate-900">{{ $totalBangunan }}</p>
                </div>
            </a>

            <a href="{{ route('tanah.index') }}" class="block">
                <div class="glass p-6 rounded-3xl shadow-xl hover:shadow-2xl transition transform hover:-translate-y-1">
                    <div class="flex justify-between text-lg"><span>Tanah</span><span>🌱</span></div>
                    <p class="text-4xl font-extrabold mt-1 text-slate-900">{{ $totalTanah }}</p>
                </div>
            </a>
        </div>
    </main>


    <script>
        const ctx = document.getElementById('asetChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Barang', 'Kategori', 'Ruangan', 'Bangunan', 'Tanah'],
                datasets: [{
                    label: 'Jumlah Aset',
                    data: [
                        {{ $totalBarang }},
                        {{ $totalKategori }},
                        {{ $totalRuangan }},
                        {{ $totalBangunan }},
                        {{ $totalTanah }}
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: { y: { beginAtZero: true }}
            }
        });
    </script>

</body>
</html>
