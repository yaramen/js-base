(function () {
    const CART_LOCAL_STORAGE_KEY = 'cart';
    const cartButtonCount = document.querySelector('.button_cart .button__count');
    const clearOrder = document.querySelector('[data-order-clear]')
    const orderCartTemplate = document.querySelector('#order-card');
    const orderRoot = document.querySelector('[data-order-root]');

    const orderStore = {
        get: function () {
            const store = localStorage.getItem(CART_LOCAL_STORAGE_KEY)
            return store ? JSON.parse(store) : {};
        },
        add: function (productId, count = 1) {
            const currentState = orderStore.get()
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
        const productId = e.target.dataset.productAdd
        orderStore.add(productId);
        updateView()
    }

    function handlerIncProduct(e) {
        const productId = e.target.dataset.productInc;
        orderStore.add(productId, orderStore.get()[productId] + 1);
        updateView()
    }

    function handlerDecProduct(e) {
        const productId = e.target.dataset.productDec;
        orderStore.add(productId, orderStore.get()[productId] - 1);
        updateView()
    }

    function handlerClearOrder() {
        orderStore.clear()
        updateView()
    }

    function updateView() {
        updateCart();
        updateCard();
        updateOrder();
    }

    function updateCart() {
        if (cartButtonCount) {
            cartButtonCount.innerText = Object.keys(orderStore.get()).length;
        }
    }

    function updateCard() {
        const productCards = document.querySelectorAll('[data-product-id]')
        const productInCard = orderStore.get()

        productCards.forEach(cardElement => {
            const productId = cardElement.dataset.productId;
            if (productId in productInCard) {
                const countElement = cardElement.querySelector('[data-product-count]')
                cardElement.classList.add('card_added');
                countElement.innerText = productInCard[productId];
            } else {
                cardElement.classList.remove('card_added');
            }
        })
    }

    function updateOrder() {
        // добавить код для подсчета суммы
        // global object products
    }

    function initCart() {
        const addInCartButtons = document.querySelectorAll('[data-product-add]')
        const incProductButtons = document.querySelectorAll('[data-product-inc]')
        const decProductButtons = document.querySelectorAll('[data-product-dec]')

        addInCartButtons.forEach(productButton => productButton.addEventListener('click', handlerAddInCart))
        incProductButtons.forEach(incButton => incButton.addEventListener('click', handlerIncProduct))
        decProductButtons.forEach(decButton => decButton.addEventListener('click', handlerDecProduct))
        clearOrder && clearOrder.addEventListener('click', handlerClearOrder)

        updateView();
    }

    function renderOrder() {
        if (typeof products === "undefined") {
            return;
        }

        const order = orderStore.get();

        let html = ''
        for(const productId in order) {
            html += renderOrderCard(products[productId])
        }

        orderRoot.innerHTML = html || '<p>Пусто</p>';
    }

    function renderOrderCard({id, image, name, price}) {
        return orderCartTemplate.innerHTML
            .replaceAll('{{PRODUCT_ID}}', id)
            .replaceAll('{{PRODUCT_IMAGE}}', image)
            .replaceAll('{{PRODUCT_NAME}}', name)
            .replaceAll('{{PRODUCT_PRICE}}', price)
    }

    renderOrder();
    initCart();
})();

