<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bangunan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-100 via-white to-slate-200 min-h-screen p-10">

<div class="max-w-7xl mx-auto">

    <div class="flex items-center justify-between mb-10">
        <h2 class="text-4xl font-bold text-slate-800">Data Bangunan</h2>
        <a href="{{ route('bangunan.create') }}" class="px-5 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl shadow-lg transition">
            + Tambah Bangunan
        </a>
    </div>

    <div class="bg-white/70 backdrop-blur-lg border border-slate-300 shadow-xl rounded-3xl overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-800 text-white">
                <tr>
                    <th class="py-4 px-6 text-sm uppercase tracking-wide">ID</th>
                    <th class="py-4 px-6 text-sm uppercase tracking-wide">Nama Bangunan</th>
                    <th class="py-4 px-6 text-sm uppercase tracking-wide">Kode Bangunan</th>
                    <th class="py-4 px-6 text-sm uppercase tracking-wide">Tanah</th>
                    <th class="py-4 px-6 text-sm uppercase tracking-wide">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bangunan as $b)
                <tr class="border-b border-slate-200 hover:bg-slate-100/70 transition">
                    <td class="py-4 px-6">{{ $b->id }}</td>
                    <td class="py-4 px-6 font-semibold text-slate-700">{{ $b->nama_bangunan }}</td>
                    <td class="py-4 px-6">{{ $b->kode_bangunan }}</td>
                    <td class="py-4 px-6">{{ $b->tanah->nama_tanah ?? '-' }}</td>
                    <td class="py-4 px-6 flex gap-2">
                        <a href="{{ route('bangunan.edit',$b->id) }}" class="px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg shadow-md text-sm transition">Edit</a>

                        <form action="{{ route('bangunan.destroy',$b->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg shadow-md text-sm transition">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

</body>
</html>