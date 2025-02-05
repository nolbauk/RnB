document.addEventListener("DOMContentLoaded", function () {
  let pages = document.querySelectorAll(".page");
  let currentIndex = 0;

  function showPage(index) {
      pages.forEach((page, i) => {
          if (i === index) {
              page.classList.add("active");
          } else {
              page.classList.remove("active");
          }
      });
  }

  document.addEventListener("keydown", function (event) {
      if (event.key === "PageDown") {
          event.preventDefault();
          if (currentIndex < pages.length - 1) {
              currentIndex++;
              showPage(currentIndex);
          }
      } else if (event.key === "PageUp") {
          event.preventDefault();
          if (currentIndex > 0) {
              currentIndex--;
              showPage(currentIndex);
          }
      }
  });

  showPage(currentIndex); // Tampilkan halaman pertama saat dimuat
});
