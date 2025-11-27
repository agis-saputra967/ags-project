<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-100 via-white to-slate-200 p-10">

<div class="max-w-3xl mx-auto bg-white/70 backdrop-blur-lg border border-slate-300 shadow-2xl rounded-3xl p-10">

    <h2 class="text-4xl font-bold text-slate-800 mb-8">Tambah Data Barang</h2>

    <form action="{{ route('barang.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label class="block mb-2 font-semibold text-slate-700">Nama Barang</label>
            <input type="text" name="nama_barang" class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
        </div>

        <div>
            <label class="block mb-2 font-semibold text-slate-700">Kode Barang</label>
            <input type="text" name="kode_barang" class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
        </div>

        <div>
            <label class="block mb-2 font-semibold text-slate-700">Kategori</label>
            <select name="kategori_id" class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                <option value="">Pilih Kategori</option>
                @foreach($kategori as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-2 font-semibold text-slate-700">Ruangan</label>
            <select name="ruangan_id" class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                <option value="">Pilih Ruangan</option>
                @foreach($ruangan as $r)
                    <option value="{{ $r->id }}">{{ $r->nama_ruangan }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-2 font-semibold text-slate-700">Tanggal Perolehan</label>
            <input type="date" name="tanggal_perolehan" class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
        </div>

        <div>
            <label class="block mb-2 font-semibold text-slate-700">Jumlah</label>
            <input type="number" name="jumlah" class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
        </div>

        <div>
            <label class="block mb-2 font-semibold text-slate-700">Satuan</label>
            <input type="text" name="satuan" class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
        </div>

        <div>
            <label class="block mb-2 font-semibold text-slate-700">Kondisi</label>
            <input type="text" name="kondisi" class="w-full p-3 rounded-xl border border-slate-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
        </div>

        <div class="flex gap-4 pt-4">
            <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl shadow-lg transition">Simpan</button>
            <a href="{{ route('barang.index') }}" class="px-6 py-3 bg-slate-600 hover:bg-slate-700 text-white rounded-xl shadow-lg transition">Batal</a>
        </div>

    </form>
</div>

</body>
</html>