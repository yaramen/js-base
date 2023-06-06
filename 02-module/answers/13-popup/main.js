(function () {
    const mainMenu = document.querySelector('.menu_main');
    const hamburger = mainMenu.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        mainMenu.classList.toggle('menu_open');
    })
})();

(function () {
    const buttons = document.querySelectorAll('[data-popup]');
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

    buttons.forEach(button => button.addEventListener('click', openPopup))
    overlay.addEventListener('click', closePopup)
    close.addEventListener('click', closePopup)
})();