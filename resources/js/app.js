document.addEventListener('DOMContentLoaded', () => {
    // =========================
    // Accordion FAQ
    // =========================
    const accordionButtons = document.querySelectorAll('.accordion-button');

    accordionButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const targetId = button.dataset.accordion;
            const content = document.getElementById(targetId);
            const arrowIcon = button.querySelector('.arrow img');

            if (!content) return;

            const isOpen =
                content.style.maxHeight &&
                content.style.maxHeight !== '0px';

            content.style.maxHeight = isOpen ? '0px' : `${content.scrollHeight}px`;

            arrowIcon?.classList.toggle('rotate-180');
        });
    });

    // =========================
    // Mobile Navbar Toggle
    // =========================
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // =========================
    // Navbar Scroll Effect
    // =========================
    const mainNavbar = document.getElementById('mainNavbar');
    const navbarInner = document.getElementById('navbarInner');

    const handleNavbarScroll = () => {
        if (!mainNavbar || !navbarInner) return;

        if (window.scrollY > 20) {
            mainNavbar.classList.add('bg-portto-black/90', 'backdrop-blur-md', 'shadow-lg');
            navbarInner.classList.remove('py-4', 'md:py-6');
            navbarInner.classList.add('py-3', 'md:py-4');
        } else {
            mainNavbar.classList.remove('bg-portto-black/90', 'backdrop-blur-md', 'shadow-lg');
            navbarInner.classList.remove('py-3', 'md:py-4');
            navbarInner.classList.add('py-4', 'md:py-6');
        }
    };

    handleNavbarScroll();
    window.addEventListener('scroll', handleNavbarScroll);
});