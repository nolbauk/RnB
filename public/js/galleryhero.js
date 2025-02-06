// Definisikan data hero untuk setiap atribut
const heroData = {
  strength: {
      title: 'Strength',
      heroes: ['Chen', 'Mirana', 'Axe', 'Drow Ranger', 'Lion', 'Tidehunter', 'Sniper', 'Vengeful Spirit', 'Wraith King', 'Crystal Maiden', 'Juggernaut', 'Queen of Pain', 'Invoker', 'Anti-Mage']
  },
  agility: {
      title: 'Agility',
      heroes: ['Phantom Lancer', 'Templar Assassin', 'Medusa', 'Luna', 'Chaos Knight', 'Sven', 'Tiny', 'Earthshaker', 'Sand King', 'Slardar', 'Kunkka', 'Pudge', 'Lifestealer', 'Night Stalker']
  },
  intelligence: {
      title: 'Intelligence',
      heroes: ['Shadow Fiend', 'Storm Spirit', 'Lina', 'Zeus', 'Puck', 'Shadow Shaman', 'Witch Doctor', 'Lich', 'Nature\'s Prophet', 'Enchantress', 'Crystal Maiden', 'Dark Willow']
  },
  universal: {
      title: 'Universal',
      heroes: ['Marci', 'Primal Beast', 'Hoodwink', 'Snapfire', 'Pangolier', 'Dark Willow', 'Monkey King']
  }
};

// Inisialisasi variabel untuk tracking
let currentSection = 'strength';
let isScrolling = false;
let lastScrollTime = Date.now();
const scrollCooldown = 1000; // 1 detik cooldown antara scroll

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
  
  // Array untuk urutan section
  const sections = ['strength', 'agility', 'intelligence', 'universal'];
  
  // Dapatkan index section sekarang
  let currentIndex = sections.indexOf(currentSection);
  
  // Hitung section berikutnya
  let nextIndex = currentIndex + direction;
  
  // Handle overflow
  if (nextIndex >= sections.length) {
      nextIndex = 0;
  } else if (nextIndex < 0) {
      nextIndex = sections.length - 1;
  }
  
  // Update current section
  currentSection = sections[nextIndex];
  
  // Update konten
  updateHeroSection(currentSection);
});

function updateHeroSection(sectionType) {
  isScrolling = true;
  
  // Dapatkan data section yang akan ditampilkan
  const sectionData = heroData[sectionType];
  
  // Update judul section
  const titleElement = document.querySelector('.box');
  titleElement.innerHTML = `
      <img src="images/universal.jfif" alt="Support" class="img-fluid me-2" style="width: 50px;">
      ${sectionData.title}
  `;
  
  // Update container hero
  const heroContainer = document.querySelector('.hero-container');
  heroContainer.style.opacity = '0';
  
  // Animate transition
  setTimeout(() => {
      // Update heroes
      heroContainer.innerHTML = sectionData.heroes.map(hero => `
          <img class="card" src="img/${hero.toLowerCase().replace(' ', '_')}.jpg" alt="${hero}">
      `).join('');
      
      // Fade in
      heroContainer.style.opacity = '1';
      
      // Reset scrolling flag
      setTimeout(() => {
          isScrolling = false;
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