(() => {
    const openMenuBtn = document.querySelector('.js-open-menu');
    const closeMenuBtn = document.querySelector('.js-close-menu');
    const modal = document.querySelector("[data-modal]");

    const toggleMenu = () => {
        const isMenuOpen = openMenuBtn.getAttribute('aria-expanded') === 'true' || false;
        openMenuBtn.setAttribute('aria-expanded', !isMenuOpen);
        modal.classList.toggle('is-hidden');

        if (!isMenuOpen) {
            disableScroll();
        } else {
            enableScroll();
        }
    };

    openMenuBtn.addEventListener('click', toggleMenu);
    closeMenuBtn.addEventListener('click', toggleMenu);

    const refs = {
        modal: document.querySelector("[data-modal]"),
    };

    const toggleModal = () => {
        refs.modal.classList.toggle("is-hidden");
        if (!refs.modal.classList.contains("is-hidden")) {
            disableScroll();
        } else {
            enableScroll();
        }
    };

    const toggleModalBtn = document.querySelector('.js-toggle-modal');
    if (toggleModalBtn) {
        toggleModalBtn.addEventListener('click', toggleModal);
    }

    function disableScroll() {
        document.body.style.overflow = 'hidden';
    }

    function enableScroll() {
        document.body.style.overflow = '';
    }

    $('.partners-mobile-menu').click(function (event) {
        toggleMenu()
    });


    $('.mobile-search').click(function (event) {
        event.preventDefault();
        toggleModal();
    });

})();

