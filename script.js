
 
 

        // Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close mobile menu on click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
            });
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 64, // offset for fixed nav
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Expand All Members Functionality
        function expandAllMembers() {
            const grid = document.getElementById('members-grid');
            const expandCard = document.getElementById('expand-card');
            
            // Remove the expand card first
            if (expandCard) {
                expandCard.remove();
            }
            
            // ==========================================
            // CARA MENGGANTI FOTO SISWA DI LIST BERIKUTNYA:
            // Ganti link 'https://placehold.co/...' di dalam properti 'img' 
            // dengan link foto atau folder lokal (misal: 'foto/fitri.jpg')
            // ==========================================
            const otherStudents = [
                { name: "Fitri Handayani", nis: "102006", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Fitri" },
                { name: "Gilang Dirga", nis: "102007", img: "https://placehold.co/300x400/0f172a/be185d?text=Gilang" },
                { name: "Hesti Wulandari", nis: "102008", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Hesti" },
                { name: "Irfan Hakim", nis: "102009", img: "https://placehold.co/300x400/0f172a/be185d?text=Irfan" },
                { name: "Jihan Fahira", nis: "102010", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Jihan" },
                { name: "Kevin Sanjaya", nis: "102011", img: "https://placehold.co/300x400/0f172a/be185d?text=Kevin" },
                { name: "Lestari Puspita", nis: "102012", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Lestari" },
                { name: "Muhamad Rizki", nis: "102013", img: "https://placehold.co/300x400/0f172a/be185d?text=Rizki" },
                { name: "Nadia Tasya", nis: "102014", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Nadia" },
                { name: "Oki Setiawan", nis: "102015", img: "https://placehold.co/300x400/0f172a/be185d?text=Oki" },
                { name: "Putri Anggraini", nis: "102016", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Putri" },
                { name: "Qory Sandioriva", nis: "102017", img: "https://placehold.co/300x400/0f172a/be185d?text=Qory" },
                { name: "Rian D'Masiv", nis: "102018", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Rian" },
                { name: "Selvi Kitty", nis: "102019", img: "https://placehold.co/300x400/0f172a/be185d?text=Selvi" },
                { name: "Tegar Septian", nis: "102020", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Tegar" },
                { name: "Utami Dewi", nis: "102021", img: "https://placehold.co/300x400/0f172a/be185d?text=Utami" },
                { name: "Vino G. Bastian", nis: "102022", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Vino" },
                { name: "Wulan Guritno", nis: "102023", img: "https://placehold.co/300x400/0f172a/be185d?text=Wulan" },
                { name: "Xaveriusdas", nis: "102024", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Xaveridsadus" },
                { name: "Yuni Shara", nis: "102025", img: "https://placehold.co/300x400/0f172a/be185d?text=Yuni" },
                { name: "Zaskia Gotik", nis: "102026", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Zaskia" },
                { name: "Ahmad Dhani", nis: "102027", img: "https://placehold.co/300x400/0f172a/be185d?text=Dhani" },
                { name: "Bunga Citra", nis: "102028", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Bunga" },
                { name: "Chandra Wijaya", nis: "102029", img: "https://placehold.co/300x400/0f172a/be185d?text=Chandra" },
                { name: "Dewi Persik", nis: "102030", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Dewi" },
                { name: "Eross Candra", nis: "102031", img: "https://placehold.co/300x400/0f172a/be185d?text=Eross" },
                { name: "Fiersa Besari", nis: "102032", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Fiersa" },
                { name: "Gita Gutawa", nis: "102033", img: "https://placehold.co/300x400/0f172a/be185d?text=Gita" },
                { name: "Husein Alatas", nis: "102034", img: "https://placehold.co/300x400/0f172a/0ea5e9?text=Husein" },
                { name: "Intan Nurul", nis: "102035", img: "https://placehold.co/300x400/0f172a/be185d?text=Intan" }
            ];

            otherStudents.forEach((student) => {
                const card = document.createElement('div');
                card.className = "bg-slate-800 rounded-xl overflow-hidden shadow-lg hover:shadow-brand-500/20 transition-all border border-slate-700 group";
                card.innerHTML = `
                    <div class="aspect-[3/4] overflow-hidden bg-slate-700">
                        <img src="${student.img}" alt="${student.name}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="font-semibold text-white text-sm truncate">${student.name}</h4>
                        <p class="text-xs text-slate-400 mt-1">NIS: ${student.nis}</p>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        // Load More Gallery Functionality
        function loadMoreGallery() {
            const extraGrid = document.getElementById('extra-gallery-grid');
            const loadContainer = document.getElementById('load-gallery-container');
            
            extraGrid.classList.remove('hidden');
            loadContainer.style.display = 'none';
        }

        // Modal Logic
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        const modalContent = document.getElementById('modalContent');

        function openModal(imageSrc, captionText) {
            modalImg.src = imageSrc;
            modalCaption.textContent = captionText;
            modal.classList.remove('hidden');
            
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('scale-95');
            }, 10);
            
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalContent.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 300);
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape" && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });

        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });
