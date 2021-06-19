<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                 data-dots="false">
                @foreach($sliders as $slide)

                    @if($slide->banner_type == 0)
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
                    @elseif($slide->banner_type == 1)
                        <div class="item-slide">
                            <img src="{{ asset('assets/images/sliders') }}/{{$slide->image}}" alt="{{$slide->title}}"
                                 class="img-slide">
                            <div class="slide-info slide-2">
                                <h2 class="f-title">{{$slide->title}}</h2>
                                <span class="f-subtitle">{{$slide->subtitle}}</span>
                                <p class="discount-code">{{$slide->link}}</p>
                                <h4 class="s-title">NTD {{$slide->price}}</h4>
                                <p class="s-subtitle"></p>
                            </div>
                        </div>
                    @elseif($slide->banner_type == 2)
                        <div class="item-slide">
                            <img src="{{ asset('assets/images/sliders') }}/{{$slide->image}}" alt="{{$slide->title}}"
                                 class="img-slide">
                            <div class="slide-info slide-3">
                                <h2 class="f-title" style="color: #9effff"><b>{{$slide->title}}</b></h2>
                                <span class="subtitle">{{$slide->subtitle}}</span>
                                <p class="sale-info">最便宜只要: <span class="price">NTD {{$slide->price}}</span></p>
                                <a href="{{$slide->link}}" class="btn-link">去 GO 物</a>
                            </div>
                        </div>
                    @endif
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

        <!--On Sale-->
        @if($sproducts->count() > 0 && $sale->status == 1 && $sale->sale_date > \Carbon\Carbon::now())
            <div class="wrap-show-advance-info-box style-1 has-countdown">
                <h3 class="title-box">{{__('string.on sale')}}</h3>
                <div class="wrap-countdown mercado-countdown"
                     data-expire="{{Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s')}}"></div>
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5"
                     data-loop="false" data-nav="true" data-dots="false"
                     data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                    @foreach($sproducts as $sproduct)
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details',['slug'=>$sproduct->slug])}}"
                                   title="{{$sproduct->name}}">
                                    <figure><img src="{{ asset('assets/images/products') }}/{{$sproduct->image}}"
                                                 width="800"
                                                 height="800"
                                                 alt="{{$sproduct->name}}"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details',['slug'=>$sproduct->slug])}}"
                                   class="product-name"><span>{{$sproduct->name}}</span></a>
                                <div class="wrap-price">
                                    <ins><p class="product-price">NTD {{$sproduct->sale_price}}</p></ins>
                                    <del><p class="product-price">NTD {{$sproduct->regular_price}}</p></del>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    @endif

    <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">{{__('string.latest products')}}</h3>
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
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">{{__('string.product categories')}}</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{ asset('assets/images/fashion-accesories-banner.jpg') }}" width="1170"
                                 height="240" alt="">
                    </figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        @foreach($categories as $key=>$category)
                            <a href="#category_{{$category->id}}"
                               class="tab-control-item {{$key==0?'active':''}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                    <div class="tab-contents">
                        @foreach($categories as $key=>$category)
                            <div class="tab-content-item {{$key==0?'active':''}}" id="category_{{$category->id}}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                     data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                     data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                    @php
                                        $c_products = DB::table('products')->where('category_id',$category->id)->get()->take($no_of_products);
                                    @endphp

                                    @foreach($c_products as $c_product)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{route('product.details',['slug'=>$c_product->slug])}}"
                                                   title="{{$c_product->name}}">
                                                    <figure><img
                                                            src="{{ asset('assets/images/products') }}/{{$c_product->image}}"
                                                            width="800"
                                                            height="800"
                                                            alt="{{$c_product->name}}">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="{{route('product.details',['slug'=>$c_product->slug])}}"
                                                   class="product-name"><span>{{$c_product->name}}</span></a>
                                                <div class="wrap-price"><span
                                                        class="product-price">NTD {{$c_product->regular_price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>
