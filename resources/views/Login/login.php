<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Aset</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-3xl p-10 w-full max-w-md border border-slate-200">
        <h2 class="text-3xl font-bold text-center mb-6 text-slate-800">Login</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf

            <label class="text-slate-700 font-medium">Email</label>
            <input type="email" name="email" class="w-full p-3 mt-1 mb-4 border rounded-xl">

            <label class="text-slate-700 font-medium">Password</label>
            <input type="password" name="password" class="w-full p-3 mt-1 mb-6 border rounded-xl">

            <button class="w-full bg-slate-800 hover:bg-slate-900 text-white py-3 rounded-xl">
                Login
            </button>
        </form>
    </div>

</body>
</html>
