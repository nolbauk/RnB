// Scrolling

// Inisialisasi variabel untuk tracking
let currentIndex = 0;
let isScrolling = false;
let lastScrollTime = Date.now();
const scrollCooldown = 1000; // 1 detik cooldown antara scroll

// Ambil semua section berdasarkan atribut
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.hero-section');
    if (sections.length > 0) {
        updateHeroSection(0);
    }
});

// Fungsi untuk mengganti tampilan section dengan animasi smooth
function updateHeroSection(index) {
    const sections = document.querySelectorAll('.hero-section');
    
    if (!sections[index]) {
        currentIndex = 0; // Reset ke awal jika index tidak valid
        return;
    }

    isScrolling = true;

    sections[currentIndex].classList.add('transitioning');

    sections[currentIndex].style.opacity = '0';
    setTimeout(() => {
        sections.forEach((section, i) => {
            section.style.display = i === index ? 'flex' : 'none';
        });

        sections[index].style.opacity = '0';
        setTimeout(() => {
            sections[index].style.opacity = '1';
        }, 50);

        currentIndex = index;

        setTimeout(() => {
            isScrolling = false;
            sections[index].classList.remove('transitioning');
            addClickEventToHeroes();
        }, 500);
    }, 300);
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
    event.preventDefault(); // Blokir scrolling default
    const currentTime = Date.now();
    if (currentTime - lastScrollTime < scrollCooldown || isScrolling) {
        return;
    }

    lastScrollTime = currentTime;
    const direction = event.deltaY > 0 ? 1 : -1;
    let nextIndex = currentIndex + direction;

    const sections = document.querySelectorAll('.hero-section');
    if (nextIndex < 0 || nextIndex >= sections.length) return;

    updateHeroSection(nextIndex);
}, { passive: false }); // Pastikan event.preventDefault() berfungsi

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
    .hero-section.transitioning {
        pointer-events: none; /* Mencegah spam scroll */
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