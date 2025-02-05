// script.js
let currentPage = 0;
const pages = document.querySelectorAll('.page');
const totalPages = pages.length;
let isScrolling = false; // Flag untuk mencegah scroll berturut-turut terlalu cepat
let lastScrollTime = 0; // Menyimpan waktu scroll terakhir untuk throttle

function scrollToPage(pageIndex) {
  if (pageIndex >= 0 && pageIndex < totalPages) {
    const targetPosition = pageIndex * window.innerHeight;
    window.scrollTo({
      top: targetPosition,
      behavior: "smooth"
    });
    currentPage = pageIndex;
  }
}

window.addEventListener('wheel', (e) => {
  const currentTime = new Date().getTime();

  // Jika interval antara scroll terlalu singkat, hentikan scroll berikutnya
  if (currentTime - lastScrollTime < 800 || isScrolling) return;

  lastScrollTime = currentTime;

  // Menentukan scroll ke halaman berikutnya atau sebelumnya
  if (e.deltaY > 0) {
    // Scroll Down
    if (currentPage < totalPages - 1) {
      isScrolling = true;
      scrollToPage(currentPage + 1);
    }
  } else {
    // Scroll Up
    if (currentPage > 0) {
      isScrolling = true;
      scrollToPage(currentPage - 1);
    }
  }

  // Setelah transisi selesai, aktifkan scroll kembali
  setTimeout(() => {
    isScrolling = false;
  }, 800); // Waktu timeout yang lebih panjang untuk throttle scroll
});

document.body.style.height = `${totalPages * 100}vh`;