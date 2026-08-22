<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Website Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Poppins', 'sans-serif']
                    },
                    colors: {
                        brand: {
                            500: '#0ea5e9',
                            600: '#0284c7',
                            900: '#0c4a6e'
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-900 text-slate-300 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-slate-800 border border-slate-700 rounded-2xl p-8 shadow-2xl">
        <!-- Logo & Title -->
        <div class="text-center mb-8">
            <div
                class="w-12 h-12 rounded-full bg-brand-600 flex items-center justify-center text-white font-bold font-heading mx-auto mb-3 shadow-lg shadow-brand-500/30 text-lg">
                XII
            </div>
            <h1 class="text-2xl font-bold font-heading text-white">Admin Panel</h1>
            <p class="text-xs text-slate-400 mt-1">Masuk untuk mengelola anggota dan galeri kelas</p>
        </div>

        <!-- Alert Error Jika Login Gagal -->
        @if ($errors->any())
            <div
                class="mb-5 bg-rose-500/10 border border-rose-500/30 text-rose-400 text-xs p-3 rounded-lg flex items-center gap-2">
                <i class="fas fa-exclamation-circle text-sm shrink-0"></i>
                <span>{{ $errors->first() }}</span>
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Input Email dengan Ikon -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Email
                    Admin</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-500 pointer-events-none">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        placeholder="kelas@gmail.com"
                        class="w-full pl-10 pr-4 py-2.5 bg-slate-900 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 text-sm transition-colors">
                </div>
            </div>

            <!-- Input Password dengan Ikon -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-500 pointer-events-none">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" required placeholder="••••••••"
                        class="w-full pl-10 pr-4 py-2.5 bg-slate-900 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 text-sm transition-colors">
                </div>
            </div>

            <!-- Tombol Submit -->
            <button type="submit"
                class="w-full py-3 bg-brand-600 hover:bg-brand-500 text-white font-semibold rounded-lg shadow-lg shadow-brand-900/50 transition-colors text-sm flex items-center justify-center gap-2">
                <i class="fas fa-sign-in-alt"></i> Masuk Dashboard
            </button>
        </form>

        <!-- Back Link -->
        <div class="mt-6 text-center">
            <a href="{{ route('home') }}"
                class="text-xs text-slate-400 hover:text-brand-400 transition-colors inline-flex items-center gap-1">
                <i class="fas fa-arrow-left"></i> Kembali ke Website Utama
            </a>
        </div>
    </div>

</body>

</html>
