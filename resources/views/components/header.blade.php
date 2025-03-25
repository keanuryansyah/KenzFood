@props(['pageTitle'])

<header id="header-section" class="section">
    <div class="container">
        <div class="content-wrapper">
            <div id="header-content">
                <div id="header-content-col1" class="hecon">
                    <a class="header-logo" href="/">DeliciousShop</a>
                </div>
                <div id="header-content-col2" class="hecon">
                    <nav id="header-menu-wrapper">
                        <ul>
                            <li class="{{$pageTitle == 'home' ? 'this' : ''}}">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="#">Menus</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div id="header-content-col3" class="hecon">
                    <div class="cart-icon">
                        <i data-feather="shopping-bag"></i>
                        <div class="many-item">
                            0
                        </div>
                    </div>
                    <a id="signin-btn" class="global-btn white-btn" href="#">Sign In</a>
                </div>
                <div id="header-content-col4" class="hecon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>

<header id="header-section-2" class="section">
    <div class="container">
        <div class="content-wrapper">
            <div id="header-content">
                <div id="header-content-col1" class="hecon">
                    <a class="header-logo" href="/">DeliciousShop</a>
                </div>
                <div id="header-content-col2" class="hecon">
                    <nav id="header-menu-wrapper">
                        <ul>
                            <li class="{{$pageTitle == 'home' ? 'this' : ''}}">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="#">Menus</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div id="header-content-col3" class="hecon">
                    <div class="cart-icon">
                        <i data-feather="shopping-bag"></i>
                        <div class="many-item">
                            0
                        </div>
                    </div>
                    <a id="signin-btn" class="global-btn white-btn" href="#">Sign In</a>
                </div>
                <div id="header-content-col4" class="hecon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="cart-wrapper show">
    <div class="cart-content-wr">
        <div id="cart-content-unfilled" class="cc">
            <i data-feather="shopping-bag"></i>
            <span>empty cart</span>
            <div class="close-cart-wrapper">
                <span>X</span>
            </div>
        </div>
        <div id="cart-content-filled" class="cc show">
            <div class="ccf-row1">
                <h2>cart</h2>
                <div class="close-cart-wrapper">
                    <span>X</span>
                </div>
            </div>
            <div class="ccf-row2">
                <div class="product-ctn">
                    <div class="pc-col1">
                        <img src="{{asset('images/burger1.jpg')}}" alt="">
                    </div>
                    <div class="pc-col2">
                        <div class="pc-col2-row1">
                            <span class="prod-name-on-cart">double beef burger</span>
                            <span class="prod-price-on-cart">Rp20.000</span>
                        </div>
                        <div class="pc-col2-row2">
                            <div class="product-qty">
                                <button type="button" class="plus-item">-</button>
                                <span class="qty-input">0</span>
                                <button type="button" class="min-item">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="pc-col3">
                        <i data-feather="trash-2"></i>
                    </div>
                </div>
                <div class="product-ctn">
                    <div class="pc-col1">
                        <img src="{{asset('images/pizza1.jpg')}}" alt="">
                    </div>
                    <div class="pc-col2">
                        <div class="pc-col2-row1">
                            <span class="prod-name-on-cart">melt cheese pizza</span>
                            <span class="prod-price-on-cart">Rp20.000</span>
                        </div>
                        <div class="pc-col2-row2">
                            <div class="product-qty">
                                <button type="button" class="plus-item">-</button>
                                <span class="qty-input">0</span>
                                <button type="button" class="min-item">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="pc-col3">
                        <i data-feather="trash-2"></i>
                    </div>
                </div>
                <div class="product-ctn">
                    <div class="pc-col1">
                        <img src="{{asset('images/pizza1.jpg')}}" alt="">
                    </div>
                    <div class="pc-col2">
                        <div class="pc-col2-row1">
                            <span class="prod-name-on-cart">melt cheese pizza</span>
                            <span class="prod-price-on-cart">Rp20.000</span>
                        </div>
                        <div class="pc-col2-row2">
                            <div class="product-qty">
                                <button type="button" class="plus-item">-</button>
                                <span class="qty-input">0</span>
                                <button type="button" class="min-item">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="pc-col3">
                        <i data-feather="trash-2"></i>
                    </div>
                </div>
                <div class="product-ctn">
                    <div class="pc-col1">
                        <img src="{{asset('images/pizza1.jpg')}}" alt="">
                    </div>
                    <div class="pc-col2">
                        <div class="pc-col2-row1">
                            <span class="prod-name-on-cart">melt cheese pizza</span>
                            <span class="prod-price-on-cart">Rp20.000</span>
                        </div>
                        <div class="pc-col2-row2">
                            <div class="product-qty">
                                <button type="button" class="plus-item">-</button>
                                <span class="qty-input">0</span>
                                <button type="button" class="min-item">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="pc-col3">
                        <i data-feather="trash-2"></i>
                    </div>
                </div>
                <div class="product-ctn">
                    <div class="pc-col1">
                        <img src="{{asset('images/pizza1.jpg')}}" alt="">
                    </div>
                    <div class="pc-col2">
                        <div class="pc-col2-row1">
                            <span class="prod-name-on-cart">melt cheese pizza</span>
                            <span class="prod-price-on-cart">Rp20.000</span>
                        </div>
                        <div class="pc-col2-row2">
                            <div class="product-qty">
                                <button type="button" class="plus-item">-</button>
                                <span class="qty-input">0</span>
                                <button type="button" class="min-item">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="pc-col3">
                        <i data-feather="trash-2"></i>
                    </div>
                </div>
                <div class="product-ctn">
                    <div class="pc-col1">
                        <img src="{{asset('images/pizza1.jpg')}}" alt="">
                    </div>
                    <div class="pc-col2">
                        <div class="pc-col2-row1">
                            <span class="prod-name-on-cart">melt cheese pizza</span>
                            <span class="prod-price-on-cart">Rp20.000</span>
                        </div>
                        <div class="pc-col2-row2">
                            <div class="product-qty">
                                <button type="button" class="plus-item">-</button>
                                <span class="qty-input">0</span>
                                <button type="button" class="min-item">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="pc-col3">
                        <i data-feather="trash-2"></i>
                    </div>
                </div>
                <div class="product-ctn">
                    <div class="pc-col1">
                        <img src="{{asset('images/pizza1.jpg')}}" alt="">
                    </div>
                    <div class="pc-col2">
                        <div class="pc-col2-row1">
                            <span class="prod-name-on-cart">melt cheese pizza</span>
                            <span class="prod-price-on-cart">Rp20.000</span>
                        </div>
                        <div class="pc-col2-row2">
                            <div class="product-qty">
                                <button type="button" class="plus-item">-</button>
                                <span class="qty-input">0</span>
                                <button type="button" class="min-item">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="pc-col3">
                        <i data-feather="trash-2"></i>
                    </div>
                </div>
                <div class="product-ctn">
                    <div class="pc-col1">
                        <img src="{{asset('images/pizza1.jpg')}}" alt="">
                    </div>
                    <div class="pc-col2">
                        <div class="pc-col2-row1">
                            <span class="prod-name-on-cart">melt cheese pizza</span>
                            <span class="prod-price-on-cart">Rp20.000</span>
                        </div>
                        <div class="pc-col2-row2">
                            <div class="product-qty">
                                <button type="button" class="plus-item">-</button>
                                <span class="qty-input">0</span>
                                <button type="button" class="min-item">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="pc-col3">
                        <i data-feather="trash-2"></i>
                    </div>
                </div>
            </div>
            <div class="ccf-row3">
                <div class="ccf-row3-row1">
                    <span class="span-subtotal">Subtotal:</span>
                    <span class="subtotal-result">Rp129.000</span>
                </div>
                <div class="ccf-row3-row2">
                    <a id="checkout-btn" href="#" class="global-btn green-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>