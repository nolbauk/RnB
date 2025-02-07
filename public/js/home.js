let currentPage = 0;
    const pages = document.querySelectorAll('.page');
    const totalPages = pages.length;
    let isScrolling = false;
    let lastScrollTime = 0;

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
      if (currentTime - lastScrollTime < 800 || isScrolling) return;
      lastScrollTime = currentTime;

      if (e.deltaY > 0 && currentPage < totalPages - 1) {
        isScrolling = true;
        scrollToPage(currentPage + 1);
      } else if (e.deltaY < 0 && currentPage > 0) {
        isScrolling = true;
        scrollToPage(currentPage - 1);
      }

      setTimeout(() => isScrolling = false, 800);
    });

    document.body.style.height = `${totalPages * 100}vh`;