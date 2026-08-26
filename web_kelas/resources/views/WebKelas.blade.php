<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kelas - XII RPL 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@500;700&display=swap"
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

<body class="bg-slate-900 text-slate-300 font-sans antialiased">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div
                        class="w-8 h-8 rounded-full bg-gradient-to-r from-brand-500 to-brand-600 flex items-center justify-center text-white font-bold font-heading">
                        XII
                    </div>
                    <span class="font-heading font-bold text-xl text-white tracking-tight">Rekayasa Perangkat Lunak
                        2</span>
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="#home"
                        class="text-slate-300 hover:text-brand-400 font-medium transition-colors">Beranda</a>
                    <a href="#structure"
                        class="text-slate-300 hover:text-brand-400 font-medium transition-colors">Struktur</a>
                    <a href="#members"
                        class="text-slate-300 hover:text-brand-400 font-medium transition-colors">Anggota</a>
                    <a href="#memories"
                        class="text-slate-300 hover:text-brand-400 font-medium transition-colors">Memories</a>
                </div>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                        class="text-slate-300 hover:text-white focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-slate-800 border-t border-slate-700 absolute w-full">
            <div class="px-4 pt-2 pb-4 space-y-1 shadow-lg">
                <a href="#home"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:text-brand-400 hover:bg-slate-700">Beranda</a>
                <a href="#structure"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:text-brand-400 hover:bg-slate-700">Struktur</a>
                <a href="#members"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:text-brand-400 hover:bg-slate-700">Anggota</a>
                <a href="#memories"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:text-brand-400 hover:bg-slate-700">Memories</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden relative border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto py-8">
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-extrabold font-heading text-white tracking-tight mb-6 drop-shadow-md">
                    Selamat Datang di <br class="hidden sm:block" />
                    <span class="text-brand-500 inline-block">XII RPL 2</span>
                </h1>
                <span
                    class="inline-block py-1 px-3 rounded-full bg-slate-900/80 text-brand-400 text-sm font-bold mb-4 border border-slate-700 shadow-sm">
                    Angkatan 2024
                </span>

                <div class="h-8 md:h-10 mb-6 flex justify-center">
                    <p class="text-lg md:text-xl text-slate-200 font-medium inline-block typing-text drop-shadow">
                        Satu keluarga, satu kenangan, satu cerita yang tak terlupakan.
                    </p>
                </div>

                <p class="text-base md:text-lg text-slate-200 mb-10 leading-relaxed font-medium drop-shadow">
                    Website ini didedikasikan untuk menyimpan kenangan, berbagi momen, dan tetap terhubung sebagai satu
                    keluarga besar XII RPL 2.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#memories"
                        class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-brand-600 hover:bg-brand-500 transition-colors shadow-lg shadow-brand-900/50">
                        Lihat Kenangan
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#members"
                        class="inline-flex justify-center items-center px-6 py-3 border border-slate-600 text-base font-medium rounded-lg text-slate-200 bg-slate-800/80 hover:bg-slate-700 transition-colors shadow-sm backdrop-blur-md">
                        Anggota Kelas
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section id="socials" class="py-16 bg-slate-950 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-sm font-semibold text-brand-500 tracking-wide uppercase">Koneksi & Tautan</h2>
                <h3 class="mt-2 text-2xl md:text-3xl font-extrabold text-white font-heading">
                    Social Media Dashboard
                </h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-2xl mx-auto">
                <a href="https://instagram.com/xiiparvarpl_" target="_blank"
                    class="bg-slate-900 border border-slate-800 hover:border-brand-500/50 rounded-2xl p-6 flex items-center gap-4 transition-all group hover:shadow-lg hover:shadow-brand-500/10">
                    <div
                        class="w-14 h-14 rounded-xl bg-gradient-to-tr from-amber-500 via-rose-500 to-purple-600 flex items-center justify-center text-white text-2xl shrink-0 group-hover:scale-105 transition-transform shadow-md">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-white text-base group-hover:text-brand-400 transition-colors">
                            Instagram Kelas</h4>
                        <p class="text-xs text-slate-400 mt-0.5">@xiiparvarpl_</p>
                        <span class="inline-block mt-2 text-xs font-medium text-brand-500">Kunjungi Profil &rarr;</span>
                    </div>
                </a>

                <a href="https://www.tiktok.com/@parvatwo__" target="_blank"
                    class="bg-slate-900 border border-slate-800 hover:border-brand-500/50 rounded-2xl p-6 flex items-center gap-4 transition-all group hover:shadow-lg hover:shadow-brand-500/10">
                    <div
                        class="w-14 h-14 rounded-xl bg-slate-800 border border-slate-700 flex items-center justify-center text-white text-2xl shrink-0 group-hover:scale-105 transition-transform shadow-md">
                        <i class="fab fa-tiktok"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-white text-base group-hover:text-brand-400 transition-colors">TikTok
                            Kreatif</h4>
                        <p class="text-xs text-slate-400 mt-0.5">@parvatwo__</p>
                        <span class="inline-block mt-2 text-xs font-medium text-brand-500">Tonton Video &rarr;</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Structure Section (Bagan Organisasi Terstruktur) -->
    <section id="structure" class="py-20 bg-slate-900 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-sm font-semibold text-brand-500 tracking-wide uppercase">Pengurus</h2>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl font-heading">
                    Struktur Organisasi Kelas
                </h3>
                <p class="mt-4 max-w-2xl text-slate-400 mx-auto">
                    Penggerak utama kelas yang memastikan koordinasi dan keseruan berjalan seimbang.
                </p>
            </div>

            <!-- Flowchart Container -->
            <div class="flex flex-col items-center gap-10">

                <!-- Level 1: Wali Kelas -->
                <div class="flex flex-col items-center">
                    <div
                        class="bg-slate-800/90 border-2 border-brand-500 rounded-2xl p-4 w-64 text-center shadow-xl shadow-brand-500/10 backdrop-blur-md">
                        <div
                            class="w-20 h-20 rounded-full mx-auto mb-3 overflow-hidden border-2 border-brand-500 shadow-md">
                            <img src="https://placehold.co/150x150/0284c7/ffffff?text=Denis" alt="Wali Kelas"
                                class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-white text-base">Bpk. Denis</h4>
                        <p class="text-xs font-semibold text-brand-400 mt-1 uppercase tracking-wider">Wali Kelas</p>
                    </div>
                    <!-- Connector Down -->
                    <div class="w-0.5 h-8 bg-slate-700"></div>
                </div>

                <!-- Level 2: Ketua Kelas -->
                <div class="flex flex-col items-center">
                    <div
                        class="bg-slate-800/90 border border-blue-500/80 rounded-2xl p-4 w-60 text-center shadow-lg backdrop-blur-md">
                        <div class="w-16 h-16 rounded-full mx-auto mb-2 overflow-hidden border-2 border-blue-500">
                            <img src="https://placehold.co/150x150/3b82f6/ffffff?text=Malvien" alt="Ketua Kelas"
                                class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-white text-sm">M. Malvien</h4>
                        <p class="text-xs font-semibold text-blue-400 mt-0.5 uppercase tracking-wider">Ketua Kelas</p>
                    </div>
                    <!-- Connector Down -->
                    <div class="w-0.5 h-8 bg-slate-700"></div>
                </div>

                <!-- Level 3: Pengurus Harian (3 Kolom Sejajar) -->
                <div class="relative w-full max-w-4xl">
                    <!-- Line Splitter for Desktop -->
                    <div class="hidden md:block absolute top-0 left-1/6 right-1/6 h-0.5 bg-slate-700"></div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-0 md:pt-6">

                        <!-- Wakil Ketua -->
                        <div class="flex flex-col items-center relative">
                            <div class="hidden md:block absolute -top-6 w-0.5 h-6 bg-slate-700"></div>
                            <div
                                class="bg-slate-800/90 border border-indigo-500/80 rounded-2xl p-4 w-full max-w-xs text-center shadow-md">
                                <div
                                    class="w-14 h-14 rounded-full mx-auto mb-2 overflow-hidden border-2 border-indigo-500">
                                    <img src="https://placehold.co/150x150/6366f1/ffffff?text=Alfian"
                                        alt="Wakil Ketua" class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-white text-sm">Alfian Riky N</h4>
                                <p class="text-xs font-medium text-indigo-400 mt-0.5">Wakil Ketua</p>
                            </div>
                        </div>

                        <!-- Sekretaris -->
                        <div class="flex flex-col items-center relative">
                            <div class="hidden md:block absolute -top-6 w-0.5 h-6 bg-slate-700"></div>
                            <div
                                class="bg-slate-800/90 border border-emerald-500/80 rounded-2xl p-4 w-full max-w-xs text-center shadow-md">
                                <div
                                    class="w-14 h-14 rounded-full mx-auto mb-2 overflow-hidden border-2 border-emerald-500">
                                    <img src="https://placehold.co/150x150/10b981/ffffff?text=Umar" alt="Sekretaris"
                                        class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-white text-sm">Unknow</h4>
                                <p class="text-xs font-medium text-emerald-400 mt-0.5">Sekretaris 1</p>
                            </div>
                        </div>

                        <!-- Bendahara -->
                        <div class="flex flex-col items-center relative">
                            <div class="hidden md:block absolute -top-6 w-0.5 h-6 bg-slate-700"></div>
                            <div
                                class="bg-slate-800/90 border border-amber-500/80 rounded-2xl p-4 w-full max-w-xs text-center shadow-md">
                                <div
                                    class="w-14 h-14 rounded-full mx-auto mb-2 overflow-hidden border-2 border-amber-500">
                                    <img src="https://placehold.co/150x150/f59e0b/ffffff?text=Diana" alt="Bendahara"
                                        class="w-full h-full object-cover">
                                </div>
                                <h4 class="font-bold text-white text-sm">Diana Putri</h4>
                                <p class="text-xs font-medium text-amber-400 mt-0.5">Bendahara 1</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Members Section -->
    <section id="members" class="py-20 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <h2 class="text-sm font-semibold text-brand-500 tracking-wide uppercase">Keluarga Kita</h2>
                    <h3
                        class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl font-heading">
                        Anggota Kelas
                    </h3>
                </div>
                <div
                    class="mt-4 md:mt-0 flex items-center bg-slate-800 rounded-lg p-2 shadow-sm border border-slate-700">
                    <span class="text-3xl font-bold text-brand-500 mr-2"
                        id="member-count">{{ $members->count() }}</span>
                    <span class="text-slate-400 text-sm leading-tight">Total<br>Siswa</span>
                </div>
            </div>

            <!-- Dynamic Member Grid -->
            <div id="members-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                @forelse ($members as $member)
                    <div
                        class="bg-slate-800 rounded-xl overflow-hidden shadow-lg hover:shadow-brand-500/20 transition-all border border-slate-700 group">
                        <div class="aspect-[3/4] overflow-hidden bg-slate-700">
                            <img src="{{ $member->photo_path }}" alt="{{ $member->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4 text-center">
                            <h4 class="font-semibold text-white text-sm truncate">{{ $member->name }}</h4>
                            <p class="text-xs text-slate-400 mt-1">NIS: {{ $member->nis }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12 text-slate-500">
                        Belum ada data anggota kelas yang dimasukkan.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Memories Section -->
    <section id="memories" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-sm font-semibold text-brand-500 tracking-wide uppercase">Galeri</h2>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl font-heading">
                    Class Memories
                </h3>
                <p class="mt-4 max-w-2xl text-slate-400 mx-auto">
                    Momen-momen berharga yang tidak akan pernah terlupakan. Klik pada foto untuk memperbesar dan melihat
                    tanggal kenangan.
                </p>
            </div>

            <!-- Dynamic Gallery Grid -->
            <div id="gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 auto-rows-[220px]">
                @forelse ($memories as $memory)
                    <div class="gallery-item relative group border border-slate-700/80 overflow-hidden rounded-xl cursor-pointer shadow-lg"
                        onclick="openImageModal('{{ $memory->image_path }}', '{{ $memory->title }}', '{{ $memory->category }}', '{{ $memory->created_at->translatedFormat('d F Y') }}')">
                        <img src="{{ $memory->image_path }}" alt="{{ $memory->title }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                        <div
                            class="gallery-overlay absolute inset-0 flex flex-col justify-end p-4 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent opacity-90 group-hover:opacity-100 transition-opacity">
                            <div class="flex justify-between items-center mb-1">
                                <span
                                    class="text-brand-400 text-[11px] font-bold uppercase tracking-wider">{{ $memory->category }}</span>
                                <span class="text-slate-400 text-[10px]"><i
                                        class="far fa-calendar-alt mr-1"></i>{{ $memory->created_at->format('d/m/Y') }}</span>
                            </div>
                            <h4 class="text-white font-bold text-base drop-shadow-md truncate">{{ $memory->title }}
                            </h4>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12 text-slate-500">
                        Belum ada foto galeri yang diunggah.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Interactive Image Modal with Date -->
    <div id="imageModal"
        class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-slate-950/90 backdrop-blur-md transition-all duration-300">
        <button onclick="closeImageModal()"
            class="absolute top-5 right-5 text-slate-400 hover:text-white transition-colors">
            <i class="fas fa-times text-2xl md:text-3xl"></i>
        </button>

        <div class="max-w-4xl w-full flex flex-col items-center">
            <div class="relative overflow-hidden rounded-2xl border border-slate-800 bg-slate-900 shadow-2xl">
                <img id="modalImage" src="" alt="Full size"
                    class="max-h-[75vh] w-auto object-contain mx-auto">
            </div>

            <!-- Metadata Section -->
            <div class="mt-4 text-center space-y-1">
                <span id="modalCategory"
                    class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-brand-500/10 text-brand-400 border border-brand-500/20"></span>
                <h3 id="modalTitle" class="text-white text-xl font-bold font-heading"></h3>
                <p id="modalDate"
                    class="text-slate-400 text-xs font-medium flex items-center justify-center gap-1.5 pt-1">
                    <i class="far fa-calendar-alt text-brand-500"></i> <span id="modalDateText"></span>
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-950 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center gap-2 mb-4 md:mb-0">
                <div
                    class="w-8 h-8 rounded-full bg-brand-600 flex items-center justify-center text-white font-bold font-heading text-sm shadow-lg shadow-brand-500/20">
                    XII
                </div>
                <span class="font-heading font-bold text-lg text-white">RPL 2</span>
            </div>

            <div class="text-slate-400 text-sm text-center md:text-left mb-4 md:mb-0">
                &copy; {{ date('Y') }} Kelas XII RPL 2. All rights reserved. <br class="block sm:hidden"> Dibuat
                dengan <i class="fas fa-heart text-rose-500 mx-1"></i> untuk kenangan.
            </div>

            <div class="flex space-x-4">
                <a href="#"
                    class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-brand-600 hover:text-white transition-all border border-slate-700">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#"
                    class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-brand-600 hover:text-white transition-all border border-slate-700">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Script Modal & Interaktivitas -->
    <script>
        function openImageModal(imageSrc, title, category, dateText) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalCategory').textContent = category;
            document.getElementById('modalDateText').textContent = 'Diunggah pada: ' + dateText;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }

        // Close Modal when clicking outside the content
        window.onclick = function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target === modal) {
                closeImageModal();
            }
        }
    </script>
</body>

</html>
