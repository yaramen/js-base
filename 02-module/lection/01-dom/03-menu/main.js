(function () {
    const mainMenu = document.querySelector('.menu_main');
    const hamburger = mainMenu.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        mainMenu.classList.toggle('menu_open')
    })
})();
