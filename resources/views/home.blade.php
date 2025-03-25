@push('styles')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
@endpush

@section('title', 'Home')

<x-main pageTitle="home">

    <section id="hero-section" class="section">
        <div class="container">
            <div class="content-wrapper">
                <div id="hero-content" class="h100">
                    <div id="hercon-col1" class="hercon">
                        <div id="hercon-col1-row1">
                            <span class="section-tagline">FAST FOOD & DELIVERY</span>
                            <h1 id="hero-title" class="section-title line-height-small">deliciousness <span class="hero-title-with-color">in every bite</span></h1>
                            <p class="hero-text line-height-normal">Enjoy the best taste with quality ingredients and perfect blends from our best chefs. From classic dishes to specialty menus, we are ready to present an unforgettable culinary experience.</p>
                        </div>
                        <div id="hercon-col1-row2">
                            <a class="global-btn gold-btn" href="">See Menus</a>
                            <a class="global-btn transparent-btn-white" href="/contact-us">Book a Table</a>
                        </div>
                    </div>
                    <div id="hercon-col2" class="hercon">
                        <div class="hercon-fim-wrapper">
                            <div class="hercon-fim">
                                <img src="{{asset('images/hero-4.jpg')}}" alt="">
                            </div>
                            <div id="hero-image-absolute1" class="hiab">
                                <img src="{{asset('images/burger3.jpg')}}" alt="">
                            </div>
                            <div id="hero-image-absolute2" class="hiab">
                                <img src="{{asset('images/pizza1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-about-section" class="section-height">
        <div class="container">
            <div class="content-wrapper">
                <div id="home-about-content">
                    <div id="home-abcon-col1" class="home-abcon">
                        <img class="resto-image abcon-abs" src="{{asset('images/about-1.jpg')}}" alt="">
                        <img src="{{asset('images/chef1.jpg')}}" alt="" class="chef-image abcon-abs">
                        <span id="year">1995</span>
                    </div>
                    <div id="home-abcon-col2" class="home-abcon">
                        <div id="home-abcon-col2-row1">
                            <span class="section-tagline">ABOUT US</span>
                            <h2 id="about-title" class="section-title line-height-small">commitment to taste!</h2>
                            <p class="about-text line-height-normal">
                                Since 1995, DeliciousShop has been a favorite destination for food lovers who want delicious food with the best quality. We believe that food is not just about taste, but also about experience—from quality ingredients, authentic cooking process, to comfortable atmosphere.
                            </p>
                            <div class="open-at">
                                <span>Mon-Fri: 9 AM – 22 PM</span>
                                <span>Saturday: 9 AM – 20 PM
                                </span>
                            </div>
                        </div>
                        <div id="home-abcon-col2-row2">
                            <a class="global-btn transparent-btn-black" href="#">About Us</a>
                            <div class="ttd">
                                <img src="{{asset('images/ttd.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="menu-section" class="section-height">
        <div class="container">
            <div class="content-wrapper">
                <div id="menu-content">
                    <div id="menu-content-row1" class="mencon">
                        <span id="menu-tagline" class="section-tagline">
                            we offer
                        </span>
                        <h2 id="menu-title" class="section-title line-height-small">most recommended menus</h2>
                    </div>
                    <div id="menu-content-row2" class="mencon">
                        <div id="card-menu-wrapper">
                            @foreach($bestMenus as $bestMenu)
                            <div data-product="menu-index-{{$bestMenu->id}}" class="card-menu">
                                <div id="card-menu-row1" class="product-fim">
                                    <img src="{{asset('images/' . $bestMenu->fim)}}" alt="">
                                </div>
                                <div id="card-menu-row2">
                                    <h4 class="product-name">{{$bestMenu->name}}</h4>
                                    <span class="product-price">Rp{{$bestMenu->price}}</span>
                                    <div class="product-qty">
                                        <button type="button" class="min-item">-</button>
                                        <span class="qty-input">0</span>
                                        <button type="button" class="plus-item">+</button>
                                    </div>
                                    <div class="product-button">
                                        <a class="global-btn grey-btn add-to-cart-btn" href="#">Add to Cart</a>
                                        <div class="product-detail">
                                            <i data-feather="info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script src="{{asset('js/cart.js')}}"></script>
    @endpush

</x-main>


<!-- <script src="{{asset('js/flickity.js')}}"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> -->

<!-- Menu::create([
'name' => 'original french fries',
'price' => '24.000',
'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat enim voluptas quod laboriosam asperiores? Mollitia!',
'fim' => 'potato1.jpg',
'category_id' => '5'
]); -->