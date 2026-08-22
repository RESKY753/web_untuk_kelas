<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - XII RPL 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            500: '#0ea5e9',
                            600: '#0284c7',
                            900: '#0c4a6e',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-900 text-slate-300 font-sans antialiased min-h-screen flex flex-col">

    <!-- Navbar Topbar -->
    <nav class="bg-slate-950 border-b border-slate-800 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Brand / Logo -->
                <div class="flex items-center gap-3">
                    <div
                        class="w-9 h-9 rounded-full bg-gradient-to-r from-brand-500 to-brand-600 flex items-center justify-center text-white font-bold font-heading shadow-md shadow-brand-500/20">
                        XII
                    </div>
                    <div>
                        <h1 class="font-heading font-bold text-white text-base leading-tight">Admin Dashboard</h1>
                        <p class="text-xs text-slate-400">Kelas XII Rekayasa Perangkat Lunak 2</p>
                    </div>
                </div>

                <!-- Right Menu & User Info -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" target="_blank"
                        class="hidden sm:inline-flex items-center gap-2 text-xs font-medium text-slate-400 hover:text-brand-400 bg-slate-900 border border-slate-800 px-3 py-2 rounded-lg transition-colors">
                        <i class="fas fa-external-link-alt"></i> Lihat Web Publik
                    </a>

                    <div class="h-6 w-px bg-slate-800 hidden sm:block"></div>

                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                            class="inline-flex items-center gap-2 text-xs font-semibold bg-rose-600/10 text-rose-400 border border-rose-600/20 px-3.5 py-2 rounded-lg hover:bg-rose-600 hover:text-white transition-all">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 flex-grow space-y-8">

        <!-- Alert Success / Error Message -->
        @if (session('success'))
            <div
                class="bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm p-4 rounded-xl flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle"></i>
                    <span>{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-emerald-200"><i
                        class="fas fa-times"></i></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-rose-500/10 border border-rose-500/30 text-rose-400 text-sm p-4 rounded-xl space-y-1">
                <div class="flex items-center gap-2 font-bold mb-1">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>Gagal memproses data:</span>
                </div>
                <ul class="list-disc list-inside text-xs pl-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Welcome Banner & Quick Action Buttons -->
        <div
            class="bg-gradient-to-r from-slate-800 via-slate-800/90 to-brand-900/40 border border-slate-700/80 rounded-2xl p-6 sm:p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 shadow-xl">
            <div>
                <span
                    class="inline-block px-3 py-1 bg-brand-500/10 border border-brand-500/20 text-brand-400 text-xs font-semibold rounded-full mb-3">
                    <i class="fas fa-shield-alt mr-1"></i> Admin Authorization Granted
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold font-heading text-white">Selamat Datang Kembali, Admin!</h2>
                <p class="text-slate-400 text-sm mt-1 max-w-xl">
                    Kelola data siswa dan unggah momen-momen terbaik kelas di sini untuk ditampilkan secara publik.
                </p>
            </div>

            <!-- Quick Add Action Buttons -->
            <div class="flex flex-wrap sm:flex-nowrap gap-3 shrink-0">
                <button onclick="openModal('modalMember')"
                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-brand-600 hover:bg-brand-500 text-white font-semibold text-sm rounded-xl transition-all shadow-lg shadow-brand-900/50">
                    <i class="fas fa-user-plus"></i> Tambah Member
                </button>
                <button onclick="openModal('modalMemory')"
                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-slate-700 hover:bg-slate-600 border border-slate-600 text-white font-semibold text-sm rounded-xl transition-all shadow-md">
                    <i class="fas fa-camera-retro text-brand-400"></i> Tambah Memories
                </button>
            </div>
        </div>

        <!-- Metric Stat Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <!-- Stat 1 -->
            <div
                class="bg-slate-800 border border-slate-700/80 rounded-xl p-5 flex items-center justify-between shadow-lg">
                <div>
                    <p class="text-xs font-semibold uppercase text-slate-400 tracking-wider">Total Anggota Kelas</p>
                    <h3 class="text-3xl font-extrabold font-heading text-white mt-1">{{ $members->count() }} <span
                            class="text-xs font-normal text-slate-400">Siswa</span></h3>
                </div>
                <div
                    class="w-12 h-12 rounded-xl bg-brand-500/10 border border-brand-500/20 text-brand-400 flex items-center justify-center text-xl">
                    <i class="fas fa-users"></i>
                </div>
            </div>

            <!-- Stat 2 -->
            <div
                class="bg-slate-800 border border-slate-700/80 rounded-xl p-5 flex items-center justify-between shadow-lg">
                <div>
                    <p class="text-xs font-semibold uppercase text-slate-400 tracking-wider">Total Foto Memories</p>
                    <h3 class="text-3xl font-extrabold font-heading text-white mt-1">{{ $memories->count() }} <span
                            class="text-xs font-normal text-slate-400">Foto</span></h3>
                </div>
                <div
                    class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/20 text-purple-400 flex items-center justify-center text-xl">
                    <i class="fas fa-images"></i>
                </div>
            </div>
        </div>

        <!-- Data Management Section (Tabs/Grid) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Table 1: Data Anggota Kelas -->
            <div class="bg-slate-800 border border-slate-700/80 rounded-2xl overflow-hidden shadow-xl flex flex-col">
                <div class="p-5 border-b border-slate-700 bg-slate-800/50 flex justify-between items-center">
                    <div class="flex items-center gap-2.5">
                        <i class="fas fa-user-graduate text-brand-500 text-lg"></i>
                        <h3 class="font-bold font-heading text-white text-base">Data Member Kelas</h3>
                    </div>
                    <button onclick="openModal('modalMember')"
                        class="text-xs font-semibold text-brand-400 hover:text-brand-300">
                        + Tambah
                    </button>
                </div>

                <div class="overflow-x-auto flex-grow">
                    <table class="w-full text-left text-sm text-slate-300">
                        <thead
                            class="bg-slate-900/80 text-slate-400 text-xs uppercase tracking-wider border-b border-slate-700">
                            <tr>
                                <th class="px-5 py-3">Foto</th>
                                <th class="px-5 py-3">NIS</th>
                                <th class="px-5 py-3">Nama</th>
                                <th class="px-5 py-3 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700/60">
                            @forelse ($members as $member)
                                <tr class="hover:bg-slate-700/30 transition-colors">
                                    <td class="px-5 py-3">
                                        <img src="{{ $member->photo_path ? asset('storage/' . $member->photo_path) : 'https://placehold.co/100x100/0f172a/0ea5e9?text=' . urlencode($member->name) }}"
                                            alt="{{ $member->name }}"
                                            class="w-9 h-9 rounded-full object-cover border border-slate-600">
                                    </td>
                                    <td class="px-5 py-3 font-mono text-xs text-slate-400">{{ $member->nis }}</td>
                                    <td class="px-5 py-3 font-semibold text-white">{{ $member->name }}</td>
                                    <td class="px-5 py-3 text-right">
                                        <form action="{{ route('members.destroy', $member->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus member ini?')"
                                                class="text-rose-400 hover:text-rose-300 transition-colors text-xs font-semibold p-1">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-5 py-6 text-center text-xs text-slate-500">Belum ada
                                        data anggota kelas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Table 2: Data Foto Memories -->
            <div class="bg-slate-800 border border-slate-700/80 rounded-2xl overflow-hidden shadow-xl flex flex-col">
                <div class="p-5 border-b border-slate-700 bg-slate-800/50 flex justify-between items-center">
                    <div class="flex items-center gap-2.5">
                        <i class="fas fa-photo-video text-purple-400 text-lg"></i>
                        <h3 class="font-bold font-heading text-white text-base">Galeri Memories</h3>
                    </div>
                    <button onclick="openModal('modalMemory')"
                        class="text-xs font-semibold text-brand-400 hover:text-brand-300">
                        + Tambah
                    </button>
                </div>

                <div class="overflow-x-auto flex-grow">
                    <table class="w-full text-left text-sm text-slate-300">
                        <thead
                            class="bg-slate-900/80 text-slate-400 text-xs uppercase tracking-wider border-b border-slate-700">
                            <tr>
                                <th class="px-5 py-3">Preview</th>
                                <th class="px-5 py-3">Judul Momen</th>
                                <th class="px-5 py-3">Kategori</th>
                                <th class="px-5 py-3 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700/60">
                            @forelse ($memories as $memory)
                                <tr class="hover:bg-slate-700/30 transition-colors">
                                    <td class="px-5 py-3">
                                        <img src="{{ asset('storage/' . $memory->image_path) }}"
                                            alt="{{ $memory->title }}"
                                            class="w-12 h-8 rounded-md object-cover border border-slate-600">
                                    </td>
                                    <td class="px-5 py-3 font-semibold text-white">{{ $memory->title }}</td>
                                    <td class="px-5 py-3">
                                        <span
                                            class="inline-block px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider bg-brand-500/10 text-brand-400 border border-brand-500/20">{{ $memory->category }}</span>
                                    </td>
                                    <td class="px-5 py-3 text-right">
                                        <form action="{{ route('memories.destroy', $memory->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus foto memories ini?')"
                                                class="text-rose-400 hover:text-rose-300 transition-colors text-xs font-semibold p-1">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-5 py-6 text-center text-xs text-slate-500">Belum ada
                                        foto galeri terunggah.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </main>

    <!-- ========================================== -->
    <!-- MODAL 1: FORM TAMBAH MEMBER (SISWA)        -->
    <!-- ========================================== -->
    <div id="modalMember"
        class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm">
        <div
            class="bg-slate-800 border border-slate-700 rounded-2xl w-full max-w-md p-6 shadow-2xl relative transform transition-all">

            <button onclick="closeModal('modalMember')"
                class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>

            <div class="flex items-center gap-3 mb-6">
                <div
                    class="w-10 h-10 rounded-xl bg-brand-600/20 border border-brand-500/30 text-brand-400 flex items-center justify-center text-lg">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div>
                    <h3 class="font-bold font-heading text-white text-lg">Tambah Member Kelas</h3>
                    <p class="text-xs text-slate-400">Masukkan data siswa baru kelas XII RPL 2</p>
                </div>
            </div>

            <!-- Form Blade Action -->
            <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-4">
                @csrf

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Nama
                        Lengkap</label>
                    <input type="text" name="name" required placeholder="Contoh: M. Resky Aditya"
                        class="w-full px-3.5 py-2.5 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 text-sm transition-colors">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">NIS
                        (Nomor Induk Siswa)</label>
                    <input type="text" name="nis" required placeholder="Contoh: 102035"
                        class="w-full px-3.5 py-2.5 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 text-sm transition-colors">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Foto
                        Profil Siswa</label>
                    <input type="file" name="photo" accept="image/*"
                        class="w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-slate-700 file:text-slate-200 hover:file:bg-slate-600 cursor-pointer">
                    <p class="text-[11px] text-slate-500 mt-1">Format: JPG, PNG, WEBP (Max: 2MB)</p>
                </div>

                <div class="pt-2 flex justify-end gap-3">
                    <button type="button" onclick="closeModal('modalMember')"
                        class="px-4 py-2.5 rounded-xl bg-slate-700 text-slate-300 text-xs font-semibold hover:bg-slate-600 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-5 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-500 text-white text-xs font-semibold transition-colors shadow-lg shadow-brand-900/50">
                        Simpan Member
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!-- ========================================== -->
    <!-- MODAL 2: FORM TAMBAH MEMORIES (GALERI)    -->
    <!-- ========================================== -->
    <div id="modalMemory"
        class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-sm">
        <div
            class="bg-slate-800 border border-slate-700 rounded-2xl w-full max-w-md p-6 shadow-2xl relative transform transition-all">

            <button onclick="closeModal('modalMemory')"
                class="absolute top-4 right-4 text-slate-400 hover:text-white transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>

            <div class="flex items-center gap-3 mb-6">
                <div
                    class="w-10 h-10 rounded-xl bg-purple-600/20 border border-purple-500/30 text-purple-400 flex items-center justify-center text-lg">
                    <i class="fas fa-camera-retro"></i>
                </div>
                <div>
                    <h3 class="font-bold font-heading text-white text-lg">Tambah Foto Memories</h3>
                    <p class="text-xs text-slate-400">Unggah kenangan momen seru bersama kelas</p>
                </div>
            </div>

            <!-- Form Blade Action -->
            <form action="{{ route('memories.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-4">
                @csrf

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Judul
                        Momen / Kegiatan</label>
                    <input type="text" name="title" required placeholder="Contoh: Piknik ke Pantai Pandawa"
                        class="w-full px-3.5 py-2.5 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-brand-500 text-sm transition-colors">
                </div>

                <div>
                    <label
                        class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Kategori</label>
                    <select name="category"
                        class="w-full px-3.5 py-2.5 bg-slate-900 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-brand-500 text-sm transition-colors">
                        <option value="Kegiatan Sekolah">Kegiatan Sekolah</option>
                        <option value="Study Tour">Study Tour</option>
                        <option value="Bebas">Bebas</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Upload
                        Foto Momen</label>
                    <input type="file" name="image" accept="image/*" required
                        class="w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-slate-700 file:text-slate-200 hover:file:bg-slate-600 cursor-pointer">
                    <p class="text-[11px] text-slate-500 mt-1">Format: JPG, PNG, WEBP (Max: 5MB)</p>
                </div>

                <div class="pt-2 flex justify-end gap-3">
                    <button type="button" onclick="closeModal('modalMemory')"
                        class="px-4 py-2.5 rounded-xl bg-slate-700 text-slate-300 text-xs font-semibold hover:bg-slate-600 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-5 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-500 text-white text-xs font-semibold transition-colors shadow-lg shadow-brand-900/50">
                        Unggah Foto
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!-- Script Sederhana untuk Modal Toggle -->
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('backdrop-blur-sm')) {
                event.target.classList.add('hidden');
            }
        }
    </script>

</body>

</html>
