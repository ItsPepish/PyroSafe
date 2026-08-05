document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
})

function iniciarApp() {
    navbarMobile();
}

function navbarMobile() {
    const botonNav = document.querySelector('[data-mobile-menu-button]');
    const menuNav = document.querySelector('[data-mobile-menu]');

    if(botonNav && menuNav) {
        const openIcon = botonNav.querySelector('[data-mobile-menu-open-icon]');
        const closeIcon = botonNav.querySelector('[data-mobile-menu-close-icon]');
        botonNav.addEventListener('click', function() {
            const isOpen = !menuNav.classList.toggle('hidden');
            
            botonNav.setAttribute('aria-expanded', isOpen);

            openIcon.classList.toggle('hidden', isOpen);
            closeIcon.classList.toggle('hidden', !isOpen);
        })

        const linksNav = menuNav.querySelectorAll('a');

        linksNav.forEach(link => {
            link.addEventListener('click', function() {
                menuNav.classList.add('hidden');
                botonNav.setAttribute('aria-expanded', 'false');
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            })
        });
    }
}