(function () {
    const mainMenu = document.querySelector('.menu_main');
    const hamburger = mainMenu.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        mainMenu.classList.toggle('menu_open');
    })
})();

(function () {
    const button = document.querySelector('[data-popup]');
    const popup = document.querySelector('.popup');
    const content = popup.querySelector('.popup__content')
    const overlay = popup.querySelector('.popup__overlay');
    const close = popup.querySelector('.popup__close')

    function openPopup(e) {
        const popupId = e.target.dataset.popup;
        const currentPopup = document.querySelector(`#${popupId}`);

        content.innerHTML = currentPopup.innerHTML;
        popup.classList.add('popup_open')
    }

    function closePopup() {
        content.innerHTML = '';
        popup.classList.remove('popup_open')
    }

    button.addEventListener('click', openPopup)
    overlay.addEventListener('click', closePopup)
    close.addEventListener('click', closePopup)
})();

(function () {
    const slider = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
})()