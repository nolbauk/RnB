// Inisialisasi variabel untuk tracking
let currentIndex = 0;
let isScrolling = false;
let lastScrollTime = Date.now();
const scrollCooldown = 1000; // 1 detik cooldown antara scroll

// Ambil semua section berdasarkan atribut
const sections = document.querySelectorAll('.hero-section');

// Fungsi untuk mengganti tampilan section dengan animasi smooth
function updateHeroSection(index) {
    isScrolling = true;
    
    // Tambahkan efek fade out ke section saat ini
    sections[currentIndex].style.opacity = '0';
    setTimeout(() => {
        // Sembunyikan semua section
        sections.forEach((section, i) => {
            section.style.display = i === index ? 'flex' : 'none';
        });
        
        // Tampilkan section baru dengan efek fade in
        sections[index].style.opacity = '0';
        setTimeout(() => {
            sections[index].style.opacity = '1';
        }, 50);
        
        // Atur section yang sedang aktif
        currentIndex = index;
        
        // Reset scrolling flag setelah animasi selesai
        setTimeout(() => {
            isScrolling = false;
            addClickEventToHeroes();
        }, 500);
    }, 300); // Waktu fade out
}

// Tambahkan event listener untuk klik pada hero
function addClickEventToHeroes() {
    const heroImages = document.querySelectorAll('.hero-container .card');
    heroImages.forEach(image => {
        image.addEventListener('click', function () {
            const heroId = this.getAttribute('data-hero-id');
            window.location.href = `/hero/${heroId}`;
        });
    });
}

// Event listener untuk scrolling dengan cooldown
document.addEventListener('wheel', (event) => {
    const currentTime = Date.now();
    if (currentTime - lastScrollTime < scrollCooldown || isScrolling) {
        return;
    }

    lastScrollTime = currentTime;
    const direction = event.deltaY > 0 ? 1 : -1;
    let nextIndex = currentIndex + direction;

    if (nextIndex < 0 || nextIndex >= sections.length) return;

    updateHeroSection(nextIndex);
});

// Tambahkan CSS untuk transisi smooth
const style = document.createElement('style');
style.textContent = `
    .hero-container {
        transition: opacity 0.3s ease-in-out;
    }
    .hero-section {
        opacity: 1;
        transition: opacity 0.3s ease-in-out;
    }
    .page-container {
        margin-top: -80px;
    }
    .card {
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.05);
    }
`;
document.head.appendChild(style);

// Inisialisasi tampilan awal
updateHeroSection(0);
