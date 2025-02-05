// Example of JavaScript usage, adding hover effects or dynamic features if needed
document.addEventListener("DOMContentLoaded", () => {
    const itemCards = document.querySelectorAll('.item-card');

    itemCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'scale(1.05)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'skew(-5deg) scale(1)';
        });
    });
});
