<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                 data-dots="false">
                @foreach($sliders as $slide)
                    <div class="item-slide">
                        <img src="{{ asset('assets/images/sliders') }}/{{$slide->image}}" alt="{{$slide->title}}"
                             class="img-slide">
                        <div class="slide-info slide-1">
                            <h2 class="f-title" style="color: #9effff"><b>{{$slide->title}}</b></h2>
                            <span class="subtitle">{{$slide->subtitle}}</span>
                            <p class="sale-info">最便宜只要: <span class="price">NTD {{$slide->price}}</span></p>
                            <a href="{{$slide->link}}" class="btn-link">去 GO 物</a>
                        </div>
                    </div>
                @endforeach
                {{--                <div class="item-slide">--}}
                {{--                    <img src="{{ asset('assets/images/main-slider-1-1.jpg') }}" alt="" class="img-slide">--}}
                {{--                    <div class="slide-info slide-1">--}}
                {{--                        <h2 class="f-title" style="color: #9effff">PlayStation 二手遊戲</h2>--}}
                {{--                        <span class="subtitle">二手遊戲現正熱賣中</span>--}}
                {{--                        <p class="sale-info">最便宜只要: <span class="price">NTD 59.99</span></p>--}}
                {{--                        <a href="/shop" class="btn-link">去 GO 物</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="item-slide">--}}
                {{--                    <img src="{{ asset('assets/images/main-slider-1-2.jpg') }}" alt="" class="img-slide">--}}
                {{--                    <div class="slide-info slide-2">--}}
                {{--                        <h2 class="f-title" style="color: #53bfdc">Nintendo Switch</h2>--}}
                {{--                        <span class="f-subtitle" style="color: #9effff">復古遊戲熱賣中</span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="item-slide">--}}
                {{--                    <img src="{{ asset('assets/images/main-slider-1-3.jpg') }}" alt="" class="img-slide">--}}
                {{--                    <div class="slide-info slide-3">--}}
                {{--                        <h2 class="f-title" style="color: #9effff">便宜玩樂最佳選擇</h2>--}}
                {{--                        <span class="f-subtitle" style="color: #66aeae">快速入手、遊戲種類齊全</span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{ asset('assets/images/home-1-banner-11.jpg') }}" alt="" width="580"
                                 height="190">
                    </figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{ asset('assets/images/home-1-banner-2.jpg') }}" alt="" width="580" height="190">
                    </figure>
                </a>
            </div>
        </div>

    {{-- <!--On Sale-->
    <div class="wrap-show-advance-info-box style-1 has-countdown">
        <h3 class="title-box">On Sale</h3>
        <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5"
             data-loop="false" data-nav="true" data-dots="false"
             data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{ asset('assets/images/products/tools_equipment_7.jpg') }}" width="800"
                                     height="800"
                                     alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#"
                       class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{ asset('assets/images/products/digital_18.jpg') }}" width="800"
                                     height="800" alt="">
                        </figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#"
                       class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price">
                        <ins><p class="product-price">$168.00</p></ins>
                        <del><p class="product-price">$250.00</p></del>
                    </div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}" width="800"
                                     height="800"
                                     alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#"
                       class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{ asset('assets/images/products/digital_17.jpg') }}" width="800"
                                     height="800" alt="">
                        </figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#"
                       class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price">
                        <ins><p class="product-price">$168.00</p></ins>
                        <del><p class="product-price">$250.00</p></del>
                    </div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{ asset('assets/images/products/tools_equipment_3.jpg') }}" width="800"
                                     height="800"
                                     alt=""></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#"
                       class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{ asset('assets/images/products/fashion_05.jpg') }}" width="800"
                                     height="800"
                                     alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#"
                       class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price">
                        <ins><p class="product-price">$168.00</p></ins>
                        <del><p class="product-price">$250.00</p></del>
                    </div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{ asset('assets/images/products/digital_4.jpg') }}" width="800"
                                     height="800"
                                     alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#"
                       class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                </div>
            </div>

            <div class="product product-style-2 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="{{ asset('assets/images/products/kidtoy_05.jpg') }}" width="800"
                                     height="800"
                                     alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                    <div class="group-flash">
                        <span class="flash-item sale-label">sale</span>
                    </div>
                    <div class="wrap-btn">
                        <a href="#" class="function-link">quick view</a>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#"
                       class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price">
                        <ins><p class="product-price">$168.00</p></ins>
                        <del><p class="product-price">$250.00</p></del>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}

    <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                {{-- <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{ asset('assets/images/digital-electronic-banner.jpg') }}" width="1170"
                                 height="240" alt="">
                    </figure>
                </a> --}}
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                 data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                 data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach($latest_products as $p_product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{ route('product.details',['slug'=>$p_product->slug]) }}"
                                               title="{{$p_product->name}}">
                                                <figure><img
                                                        src="{{ asset('assets/images/products') }}/{{$p_product->image}}"
                                                        width="800"
                                                        height="800"
                                                        alt="{{$p_product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>{{$p_product->name}}</span></a>
                                            <div class="wrap-price"><span
                                                    class="product-price">NTD {{$p_product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Product Categories-->
        {{--        <div class="wrap-show-advance-info-box style-1">--}}
        {{--            <h3 class="title-box">Product Categories</h3>--}}
        {{--            <div class="wrap-top-banner">--}}
        {{--                --}}{{-- <a href="#" class="link-banner banner-effect-2">--}}
        {{--                    <figure><img src="{{ asset('assets/images/fashion-accesories-banner.jpg') }}" width="1170"--}}
        {{--                                 height="240" alt="">--}}
        {{--                    </figure>--}}
        {{--                </a> --}}
        {{--            </div>--}}
        {{--            <div class="wrap-products">--}}
        {{--                <div class="wrap-product-tab tab-style-1">--}}
        {{--                    <div class="tab-control">--}}
        {{--                        <a href="#fashion_1a" class="tab-control-item active">Smartphone</a>--}}
        {{--                        <a href="#fashion_1b" class="tab-control-item">Watch</a>--}}
        {{--                        <a href="#fashion_1c" class="tab-control-item">Laptop</a>--}}
        {{--                        <a href="#fashion_1d" class="tab-control-item">Tablet</a>--}}
        {{--                    </div>--}}
        {{--                    <div class="tab-contents">--}}

        {{--                        <div class="tab-content-item active" id="fashion_1a">--}}
        {{--                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"--}}
        {{--                                 data-items="5" data-loop="false" data-nav="true" data-dots="false"--}}
        {{--                                 data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_01.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Lois Caron LCS-4027 Analog Watch - For Men</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_02.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Business Men Leather Laptop Tote Bags Man Crossbody </span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_09.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_03.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_07.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_06.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_05.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="tab-content-item" id="fashion_1b">--}}
        {{--                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container "--}}
        {{--                                 data-items="5" data-loop="false" data-nav="true" data-dots="false"--}}
        {{--                                 data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_03.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_07.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_09.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_02.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_05.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_04.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="tab-content-item" id="fashion_1c">--}}
        {{--                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"--}}
        {{--                                 data-items="5" data-loop="false" data-nav="true" data-dots="false"--}}
        {{--                                 data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_02.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_03.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_04.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_05.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_06.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_07.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_09.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                        <div class="tab-content-item" id="fashion_1d">--}}
        {{--                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"--}}
        {{--                                 data-items="5" data-loop="false" data-nav="true" data-dots="false"--}}
        {{--                                 data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_05.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quick view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="product-rating">--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_04.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="product-rating">--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_03.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="product-rating">--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_02.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="product-rating">--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_01.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="product-rating">--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_06.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item sale-label">sale</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="product-rating">--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_08.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item new-label">new</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="product-rating">--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                                <div class="product product-style-2 equal-elem ">--}}
        {{--                                    <div class="product-thumnail">--}}
        {{--                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">--}}
        {{--                                            <figure><img src="{{ asset('assets/images/products/fashion_09.jpg') }}"--}}
        {{--                                                         width="800"--}}
        {{--                                                         height="800"--}}
        {{--                                                         alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
        {{--                                        </a>--}}
        {{--                                        <div class="group-flash">--}}
        {{--                                            <span class="flash-item bestseller-label">Bestseller</span>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-btn">--}}
        {{--                                            <a href="#" class="function-link">quic view</a>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="product-info">--}}
        {{--                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>--}}
        {{--                                        <div class="product-rating">--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="wrap-price">--}}
        {{--                                            <ins><p class="product-price">$168.00</p></ins>--}}
        {{--                                            <del><p class="product-price">$250.00</p></del>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}

        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

    </div>

</main>
