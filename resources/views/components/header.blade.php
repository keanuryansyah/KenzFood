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
                        <span class="cart-content-wrapper"></span>
                        <div class="cart-content">
                            <h1>CART</h1>
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
                        <span class="cart-content-wrapper"></span>
                        <div class="cart-content">
                            <h1>CART</h1>
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