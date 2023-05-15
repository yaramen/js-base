(function () {
    const cartButtonCount = document.querySelector('.button_cart .button__count');
    const addInCartButtons = document.querySelectorAll('[data-product-add]')
    const productCards = document.querySelectorAll('[data-product-id]')
    const incProductButtons = document.querySelectorAll('[data-product-inc]')
    const decProductButtons = document.querySelectorAll('[data-product-dec]')


    const CART_LOCAL_STORAGE_KEY = 'cart';
    const cartStore = {
        get: function () {
            const store = localStorage.getItem(CART_LOCAL_STORAGE_KEY)
            return store ? JSON.parse(store) : {};
        },
        add: function (productId, count = 1) {
            const currentState = cartStore.get()
            currentState[productId] = count;

            if (currentState[productId] <= 0) {
                delete currentState[productId];
            }
            localStorage.setItem(CART_LOCAL_STORAGE_KEY, JSON.stringify(currentState));
        },
        clear: function () {
            localStorage.setItem(CART_LOCAL_STORAGE_KEY, JSON.stringify({}));
        }
    }

    function handlerAddInCart(e) {
        cartStore.add(e.target.dataset.productAdd);
        updateView()
    }

    function handlerIncProduct(e) {
        const productId = e.target.dataset.productInc;
        cartStore.add(productId, cartStore.get()[productId] + 1);
        updateView()
    }

    function handlerDecProduct(e) {
        const productId = e.target.dataset.productDec;
        cartStore.add(productId, cartStore.get()[productId] - 1);
        updateView()
    }

    function updateView() {
        updateCart();
        updateCard();
    }

    function updateCart() {
        cartButtonCount.innerText = Object.keys(cartStore.get()).length;
    }

    function updateCard() {
        productCards.forEach(cardElement => {
            const productId = cardElement.dataset.productId;
            const productInCard = cartStore.get()
            if (productId in productInCard) {
                const countElement = cardElement.querySelector('[data-product-count]')
                cardElement.classList.add('card_added');
                countElement.innerText = productInCard[productId];
            } else {
                cardElement.classList.remove('card_added');
            }
        })
    }

    addInCartButtons.forEach(productButton => productButton.addEventListener('click', handlerAddInCart))
    incProductButtons.forEach(incButton => incButton.addEventListener('click', handlerIncProduct))
    decProductButtons.forEach(decButton => decButton.addEventListener('click', handlerDecProduct))

    updateView();
})();

