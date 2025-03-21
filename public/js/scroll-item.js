// Revised Scrolling for Item Page

document.addEventListener('DOMContentLoaded', () => {
    // Variabel untuk tracking scroll
    let currentSectionIndex = 0;
    let isScrolling = false;
    let lastScrollTime = Date.now();
    const scrollCooldown = 1000; // 1 detik cooldown antara scroll

    // Ambil semua item dari container
    const allItems = document.querySelectorAll('.services_section_2 .item-link');
    if (allItems.length === 0) return;

    // Container untuk sections
    const container = document.querySelector('.services_section_2');
    if (!container) return;

    // Simpan konten asli untuk digunakan kembali
    const originalContent = container.innerHTML;
    container.innerHTML = '';

    // Buat sections dengan jumlah item per section
    const itemsPerSection = 8;
    const sections = [];
    
    // Group items into sections
    for (let i = 0; i < allItems.length; i += itemsPerSection) {
        const section = document.createElement('div');
        section.className = 'item-section';
        section.style.display = i === 0 ? 'flex' : 'none';
        section.style.opacity = '1';
        section.style.flexWrap = 'wrap';
        section.style.justifyContent = 'center';
        section.style.width = '100%';
        
        // Add items to this section
        const sectionItems = Array.from(allItems).slice(i, i + itemsPerSection);
        sectionItems.forEach(item => {
            const clone = item.cloneNode(true);
            section.appendChild(clone);
        });
        
        container.appendChild(section);
        sections.push(section);
    }

    // Tambahkan pagination dots jika ada lebih dari 1 section
    if (sections.length > 1) {
        const paginationContainer = document.createElement('div');
        paginationContainer.className = 'item-pagination';
        paginationContainer.style.display = 'flex';
        paginationContainer.style.justifyContent = 'center';
        paginationContainer.style.margin = '20px 0';
        
        for (let i = 0; i < sections.length; i++) {
            const dot = document.createElement('div');
            dot.className = i === 0 ? 'pagination-dot active' : 'pagination-dot';
            dot.setAttribute('data-index', i);
            
            // Add click event to dots
            dot.addEventListener('click', function() {
                if (isScrolling) return;
                const index = parseInt(this.getAttribute('data-index'));
                updateSection(index);
            });
            
            paginationContainer.appendChild(dot);
        }
        
        // Add pagination after the container
        container.parentNode.insertBefore(paginationContainer, container.nextSibling);
    }

    // Fungsi untuk mengganti tampilan section dengan animasi smooth
    function updateSection(index) {
        if (index < 0 || index >= sections.length || isScrolling) return;
        
        isScrolling = true;
        
        // Fade out current section
        sections[currentSectionIndex].style.opacity = '0';
        
        setTimeout(() => {
            // Hide all sections
            sections.forEach(section => {
                section.style.display = 'none';
            });
            
            // Show target section
            sections[index].style.display = 'flex';
            
            // Fade in target section
            setTimeout(() => {
                sections[index].style.opacity = '1';
            }, 50);
            
            // Update active pagination dot
            const dots = document.querySelectorAll('.pagination-dot');
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
            
            currentSectionIndex = index;
            
            // Reset scrolling flag after animation completes
            setTimeout(() => {
                isScrolling = false;
            }, 500);
        }, 300);
    }

    // Event listener untuk scrolling dengan mouse wheel
    window.addEventListener('wheel', (event) => {
        if (sections.length <= 1) return;
        
        const currentTime = Date.now();
        if (currentTime - lastScrollTime < scrollCooldown || isScrolling) return;
        
        event.preventDefault();
        lastScrollTime = currentTime;
        
        const direction = event.deltaY > 0 ? 1 : -1;
        const nextIndex = currentSectionIndex + direction;
        
        if (nextIndex >= 0 && nextIndex < sections.length) {
            updateSection(nextIndex);
        }
    }, { passive: false });

    // Add keyboard navigation
    window.addEventListener('keydown', (event) => {
        if (sections.length <= 1) return;
        
        const currentTime = Date.now();
        if (currentTime - lastScrollTime < scrollCooldown || isScrolling) return;
        
        if (event.key === 'ArrowDown' || event.key === 'ArrowRight') {
            event.preventDefault();
            lastScrollTime = currentTime;
            
            const nextIndex = currentSectionIndex + 1;
            if (nextIndex < sections.length) {
                updateSection(nextIndex);
            }
        } else if (event.key === 'ArrowUp' || event.key === 'ArrowLeft') {
            event.preventDefault();
            lastScrollTime = currentTime;
            
            const prevIndex = currentSectionIndex - 1;
            if (prevIndex >= 0) {
                updateSection(prevIndex);
            }
        }
    });

    // Add CSS styles
    const styleElement = document.createElement('style');
    styleElement.textContent = `
        .item-section {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }
        
        .services_box {
            transition: transform 0.3s ease-in-out;
        }
        
        .services_box:hover {
            transform: scale(1.05);
        }
        
        .item-pagination {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        
        .pagination-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #888;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .pagination-dot.active {
            background-color: #fff;
        }
        
        .item-link {
            margin: 15px;
            text-decoration: none;
        }
    `;
    document.head.appendChild(styleElement);
});