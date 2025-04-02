document.addEventListener('DOMContentLoaded', () => {

    let headerSection2 = document.getElementById('header-section-2');
    let body = document.body;

    // Buka cart.
    let openCartButtons = document.querySelectorAll('.cart-icon');
    let cartWrapper = document.querySelector('.cart-wrapper');

    openCartButtons.forEach(openCartButton => {

        openCartButton.addEventListener('click', () => {
            body.style.overflow = 'hidden';
            cartWrapper.classList.add('show');
        });

    });

    // Sampe sini.

    // Tutup cart.
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

    // Sampe sini.

    // Interaksi tombol plus pada card menu.
    let plusButtonOnCardMenus = document.querySelectorAll('.card-menu .plus-item');
    let minButtonOnCardMenus = document.querySelectorAll('.card-menu .min-item');

    plusButtonOnCardMenus.forEach(plusButtonOnCardMenu => {
        plusButtonOnCardMenu.addEventListener('click', () => {
            // ADD QTY
            let qty = plusButtonOnCardMenu.previousElementSibling;
            qty.innerHTML = Number(qty.innerHTML) + 1;

            // BUTTON ADD TO CART ACTIVE
            let addToCartButton = plusButtonOnCardMenu.closest('.card-menu').querySelector('.product-button a');

            addToCartButton.classList.add('active');

        })
    })

    // Sampe sini.

    // Interaksi tombol min pada card menu.
    minButtonOnCardMenus.forEach(minButtonOnCardMenu => {
        minButtonOnCardMenu.addEventListener('click', () => {
            // MIN QTY
            let qty = minButtonOnCardMenu.nextElementSibling;

            if (Number(qty.innerHTML) < 1) {
                return;
            } else if (Number(qty.innerHTML) == 1) {
                let minToCartButton = minButtonOnCardMenu.closest('.card-menu').querySelector('.product-button a');

                minToCartButton.classList.remove('active');

            }

            qty.innerHTML = Number(qty.innerHTML) - 1;
        })
    })

    // Sampe sini.

    // Fungsi add to cart.
    let addToCart = (btn) => {

        // Ambil header section2 lalu munculkan.
        headerSection2.classList.add('show');

        // Ambil parent tertua dari tombol yang di klik.
        let rootParent = btn.closest('.card-menu');

        // Ambil jumlah produk.
        let qtyProduct = rootParent.querySelector('.qty-input').innerHTML;

        // Ambil harga produk.
        let priceProduct = rootParent.querySelector('.product-price').innerHTML.replace(/[^\d.,]/g, '');

        // Jadikan harga produk ke tipe data integer.
        let priceProductNumber = Number(priceProduct.replace(/\./g, "")) * Number(qtyProduct);

        // Ambil ikon cart pada header section.
        let manyItems = document.querySelectorAll('.many-item');

        manyItems.forEach(manyItem => {
            manyItem.innerHTML = Number(manyItem.innerHTML) + Number(qtyProduct);
        })

        if (!btn.classList.contains('active') && qtyProduct == 0) {
            return;
        }

        // Ambil ID produk.
        let idProduct = rootParent.getAttribute('data-product');

        // Cek apakah produk sudah ada didalam localstorage dan cart.
        let checkingProductOnLocalStorage = localStorage.getItem('temp-cart');

        let checkFlag = false;

        if (checkingProductOnLocalStorage) {
            let parseCheckings = JSON.parse(checkingProductOnLocalStorage);

            parseCheckings.forEach(parseChecking => {
                if (parseChecking.idProduct == idProduct) {
                    // Ambil semua item pada cart.
                    let allItems = document.querySelectorAll('#cart-content-filled .ccf-row2 .product-ctn');
                    allItems.forEach(allItem => {
                        if (allItem.getAttribute('data-product') === idProduct) {
                            allItem.querySelector('.qty-input').innerHTML = Number(allItem.querySelector('.qty-input').innerHTML) + Number(qtyProduct);

                            // Rest tombol pada cart menu.
                            rootParent.querySelector('.qty-input').innerHTML = '0';

                            btn.classList.remove('active');

                            // Ambil subtotal harga.
                            let lastSubtotal = document.querySelector('.last-subtotal');

                            let newSubtotal = Number(lastSubtotal.innerHTML.replace(/\./g, "")) + priceProductNumber;

                            lastSubtotal.innerHTML = newSubtotal.toLocaleString('id-ID');

                            // Update localstorage
                            parseChecking.qtyProduct = Number(parseChecking.qtyProduct) + Number(qtyProduct);

                            let newData = [];

                            parseCheckings.forEach(parseCheck => {
                                newData.push(parseCheck);
                            });

                            localStorage.setItem('temp-cart', JSON.stringify(newData));


                            checkFlag = true;

                        }
                    })

                }
            })
        }

        if (checkFlag) {
            return;
        }

        // Ambil fitur image produk.
        let fimProduct = rootParent.querySelector('.product-fim img').src;

        // Ambil nama produk.
        let nameProduct = rootParent.querySelector('.product-name').innerHTML;


        // Ambil konten pembungkus pada cart.
        let cartContents = document.querySelectorAll('.cc');
        cartContents.forEach(cartContent => {
            if (cartContent.getAttribute('id') == 'cart-content-unfilled') {
                cartContent.classList.remove('show');
            } else {
                cartContent.classList.add('show');

                // Ambil parent untuk membungkus list produk yang di tambahkan kedalam cart.
                let cartItemWrapper = cartContent.querySelector('.ccf-row2');

                // DIV class product-ctn
                let makeProductCtn = document.createElement('div');
                makeProductCtn.classList.add('product-ctn');
                makeProductCtn.setAttribute('data-product', idProduct);

                // DIV class pc-col1
                let makePcCol1 = document.createElement('div');
                makePcCol1.classList.add('pc-col1');

                // IMG fim product
                let makeImgFim = document.createElement('img');
                makeImgFim.src = fimProduct;

                makePcCol1.appendChild(makeImgFim);

                // DIV class pc-col2
                let makePcCol2 = document.createElement('div');
                makePcCol2.classList.add('pc-col2');

                // DIV class pc-col2-row1
                let makePcCol2Row1 = document.createElement('div');
                makePcCol2Row1.classList.add('pc-col2-row1');

                // SPAN class prod-name-on-cart
                let makeSpanProdName = document.createElement('span')
                makeSpanProdName.classList.add('prod-name-on-cart');
                makeSpanProdName.innerHTML = nameProduct;

                // SPAN class prod-price-on-cart
                let makeSpanProdPrice = document.createElement('span')
                makeSpanProdPrice.classList.add('prod-price-on-cart');
                makeSpanProdPrice.innerHTML = 'Rp' + priceProduct;

                makePcCol2Row1.append(makeSpanProdName, makeSpanProdPrice);

                // DIV class pc-col2-row2
                let makePcCol2Row2 = document.createElement('div');
                makePcCol2Row2.classList.add('pc-col2-row2');

                // DIV class product-qty
                let makeProductQty = document.createElement('div');
                makeProductQty.classList.add('product-qty');

                // BUTTON class plus-item
                let makeButtonPlusItem = document.createElement('button');
                makeButtonPlusItem.type = 'button';
                makeButtonPlusItem.classList.add('plus-item');
                makeButtonPlusItem.innerHTML = '+';

                // SPAN class qty-input
                let makeQtyInput = document.createElement('span');
                makeQtyInput.classList.add('qty-input');
                makeQtyInput.innerHTML = qtyProduct;

                // BUTTON class min-item
                let makeButtonMinItem = document.createElement('button');
                makeButtonMinItem.type = 'button';
                makeButtonMinItem.classList.add('min-item');
                makeButtonMinItem.innerHTML = '-';

                makeProductQty.append(makeButtonMinItem, makeQtyInput, makeButtonPlusItem);

                makePcCol2Row2.appendChild(makeProductQty);

                makePcCol2.append(makePcCol2Row1, makePcCol2Row2);

                // DIV class pc-col3
                let makePcCol3 = document.createElement('div');
                makePcCol3.classList.add('pc-col3');

                // i for trash icon
                let trashIcon = document.createElement('i')
                trashIcon.setAttribute('data-feather', 'trash-2');

                makePcCol3.appendChild(trashIcon);


                makeProductCtn.append(makePcCol1, makePcCol2, makePcCol3);

                cartItemWrapper.appendChild(makeProductCtn);
                feather.replace();

                // SUBTOTAL
                let spanSubtotal = document.querySelector('.subtotal-result .last-subtotal');

                let currentSubtotal = Number(spanSubtotal.innerHTML.replace(/\./g, ""))

                let amount = currentSubtotal + priceProductNumber;

                let lastSubtotal = amount.toLocaleString('id-ID');

                spanSubtotal.innerHTML = lastSubtotal;

                // Reset tombol pada card menu.
                rootParent.querySelector('.qty-input').innerHTML = '0';

                btn.classList.remove('active');

                // CREATE OBJECT TEMPORARY CART
                let tempCart = [
                    {
                        idProduct: idProduct,
                        qtyProduct: qtyProduct
                    }
                ];

                // IF LOCAL STORAGE temp-cart IS CREATED
                if (localStorage.getItem('temp-cart')) {
                    let parseTempCart = JSON.parse(localStorage.getItem('temp-cart'));

                    parseTempCart.push({
                        idProduct: idProduct,
                        qtyProduct: qtyProduct
                    });

                    localStorage.setItem('temp-cart', JSON.stringify(parseTempCart));

                    return;

                }

                localStorage.setItem('temp-cart', JSON.stringify(tempCart));

            }


        })



    }

    // Sampe sini.



    // Eksekusi fungsi add to cart.
    let productButtons = document.querySelectorAll('.product-button a');
    productButtons.forEach(productButton => {
        productButton.addEventListener('click', (e) => {
            e.preventDefault();

            addToCart(productButton);

        })
    })

    // Sampe sini.

});

