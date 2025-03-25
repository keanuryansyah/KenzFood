window.addEventListener('DOMContentLoaded', () => {

    let body = document.body;

    // OPEN CART
    let openCartButtons = document.querySelectorAll('.cart-icon');
    let cartWrapper = document.querySelector('.cart-wrapper');

    openCartButtons.forEach(openCartButton => {

        openCartButton.addEventListener('click', () => {
            body.style.overflow = 'hidden';
            cartWrapper.classList.add('show');
        });

    });

    // CLOSE CART
    let closeCartButtons = document.querySelectorAll('.close-cart-wrapper');
    closeCartButtons.forEach(closeCartButton => {
        closeCartButton.addEventListener('click', () => {
            body.style.overflow = 'visible';
            cartWrapper.classList.remove('show');
        })
    })

    cartWrapper.addEventListener('click', (e) => {
        if (e.target == cartWrapper) {
            body.style.overflow = 'visible';
            cartWrapper.classList.remove('show');
        }
    })

    // ADD PRODUCT TO CART
    let plusButtonOnCardMenus = document.querySelectorAll('.card-menu .plus-item');

    let qtyInputOnCardMenus = document.querySelectorAll('.card-menu .qty-input');

    let minButtonOnCardMenus = document.querySelectorAll('.card-menu .min-item');

    plusButtonOnCardMenus.forEach(plusButtonOnCardMenu => {
        plusButtonOnCardMenu.addEventListener('click', () => {
            // ADD QTY
            plusButtonOnCardMenu.previousElementSibling.innerHTML = Number(plusButtonOnCardMenu.previousElementSibling.innerHTML) + 1;

            plusButtonOnCardMenu.closest('.card-menu').querySelector('.product-button a').classList.add('active');

        })
    })

    minButtonOnCardMenus.forEach(minButtonOnCardMenu => {
        minButtonOnCardMenu.addEventListener('click', () => {
            // MIN QTY


            if (Number(minButtonOnCardMenu.nextElementSibling.innerHTML) < 1) {

                return;
            } else if (Number(minButtonOnCardMenu.nextElementSibling.innerHTML) == 1) {
                minButtonOnCardMenu.closest('.card-menu').querySelector('.product-button a').classList.remove('active');
            }

            minButtonOnCardMenu.nextElementSibling.innerHTML = Number(minButtonOnCardMenu.nextElementSibling.innerHTML) - 1;
        })
    })


});