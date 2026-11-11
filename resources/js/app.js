const menuToggle = document.querySelector('.menu-toggle');
const primaryNavigation = document.querySelector('.primary-nav');

if (menuToggle && primaryNavigation) {
    menuToggle.addEventListener('click', () => {
        const isOpen = primaryNavigation.classList.toggle('is-open');
        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
    });

    primaryNavigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            primaryNavigation.classList.remove('is-open');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.setAttribute('aria-label', 'Open navigation');
        });
    });
}
