// Inisialisasi variabel untuk tracking
let currentSection = 'strength';
let isScrolling = false;
let lastScrollTime = Date.now();
const scrollCooldown = 1000; // 1 detik cooldown antara scroll

// Array untuk urutan section
const sections = ['strength', 'agility', 'intelligence', 'universal'];

// Setup event listener untuk wheel event
document.addEventListener('wheel', (event) => {
    // Cek apakah sudah melewati cooldown
    const currentTime = Date.now();
    if (currentTime - lastScrollTime < scrollCooldown || isScrolling) {
        return;
    }

    // Update last scroll time
    lastScrollTime = currentTime;

    // Tentukan arah scroll
    const direction = event.deltaY > 0 ? 1 : -1;

    // Dapatkan index section sekarang
    let currentIndex = sections.indexOf(currentSection);

    // Hitung section berikutnya
    let nextIndex = currentIndex + direction;

    // Batasi scroll agar tidak bisa melewati batas atas dan bawah
    if (nextIndex < 0 || nextIndex >= sections.length) {
        return; // Jangan lanjutkan jika sudah di batas
    }

    // Update current section
    currentSection = sections[nextIndex];

    // Update konten
    updateHeroSection(currentSection);
});

function updateHeroSection(sectionType) {
    isScrolling = true;

    // Update judul section
    const titleElement = document.querySelector('.box');
    titleElement.innerHTML = `
        <img src="images/universal.jfif" alt="Support" class="img-fluid me-2" style="width: 50px;">
        ${sectionType.charAt(0).toUpperCase() + sectionType.slice(1)}
    `;

    // Update container hero
    const heroContainer = document.querySelector('.hero-container');
    heroContainer.style.opacity = '0';

    // Animate transition
    setTimeout(() => {
        // Update heroes
        const heroes = document.querySelectorAll(`.hero-section.${sectionType} .card`);
        heroContainer.innerHTML = '';
        heroes.forEach(hero => {
            heroContainer.appendChild(hero.cloneNode(true));
        });

        // Fade in
        heroContainer.style.opacity = '1';

        // Reset scrolling flag
        setTimeout(() => {
            isScrolling = false;

            // Inisialisasi event listener untuk klik hero
            const heroImages = document.querySelectorAll('.hero-container .card');
            heroImages.forEach(image => {
                image.addEventListener('click', function() {
                    const heroId = this.getAttribute('data-hero-id');
                    window.location.href = `/hero/${heroId}`;
                });
            });
        }, 500);
    }, 300);
}

// Tambahkan CSS untuk transisi smooth
const style = document.createElement('style');
style.textContent = `
    .hero-container {
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
updateHeroSection('strength');