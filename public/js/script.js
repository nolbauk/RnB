document.addEventListener("DOMContentLoaded", function () {
  let sections = document.querySelectorAll(".hero-section");
  let currentIndex = 0;
  let isScrolling = false;

  function scrollToSection(index) {
      if (index >= 0 && index < sections.length) {
          sections[index].scrollIntoView({ behavior: "smooth" });
          currentIndex = index;
      }
  }

  window.addEventListener("wheel", function (event) {
      if (isScrolling) return; 
      isScrolling = true;

      setTimeout(() => { isScrolling = false; }, 800); // Mencegah scroll cepat

      if (event.deltaY > 0) {
          // Scroll ke bawah
          scrollToSection(currentIndex + 1);
      } else {
          // Scroll ke atas
          scrollToSection(currentIndex - 1);
      }
  });
});
