<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Website Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'], heading: ['Poppins', 'sans-serif'] },
                    colors: { brand: { 500: '#0ea5e9', 600: '#0284c7', 900: '#0c4a6e' } }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-900 text-slate-300 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-slate-800 border border-slate-700 rounded-2xl p-8 shadow-2xl">
        <div class="text-center mb-8">
            <div class="w-12 h-12 rounded-full bg-brand-600 flex items-center justify-center text-white font-bold font-heading mx-auto mb-3 shadow-lg shadow-brand-500/30 text-lg">
                XII
            </div>
            <h1 class="text-2xl font-bold font-heading text-white">Admin Panel</h1>
            <p class="text-xs text-slate-400 mt-1">Masuk untuk mengelola anggota dan galeri kelas</p>
        </div>

        <form action="#" method="POST" class="space-y-5">
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Username / Email</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-500">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" required placeholder="admin@kelas.com" class="w-full pl-10 pr-4 py-2.5 bg-slate-900 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 text-sm transition-colors">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-500">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" required placeholder="••••••••" class="w-full pl-10 pr-4 py-2.5 bg-slate-900 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 text-sm transition-colors">
                </div>
            </div>

            <button type="submit" class="w-full py-3 bg-brand-600 hover:bg-brand-500 text-white font-semibold rounded-lg shadow-lg shadow-brand-900/50 transition-colors text-sm">
                Masuk Dashboard
            </button>
        </form>
        
        <div class="mt-6 text-center">
            <a href="index.html" class="text-xs text-slate-400 hover:text-brand-400 transition-colors">
                &larr; Kembali ke Website Utama
            </a>
        </div>
    </div>

</body>
</html>