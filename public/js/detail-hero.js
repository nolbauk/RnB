document.addEventListener('DOMContentLoaded', function() {
    const iconContainer = document.querySelector('.icon-container');
    const talentTree = iconContainer.querySelector('.talent-tree');

    iconContainer.addEventListener('mouseenter', function() {
        talentTree.style.display = 'block';
    });

    iconContainer.addEventListener('mouseleave', function() {
        talentTree.style.display = 'none';
    });
});