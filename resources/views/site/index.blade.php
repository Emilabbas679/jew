@extends('site.home')
@section('content')
<!-- Main slider start -->
<section class="main-slider owl-carousel">
    <div class="main-slider-item">
        <div class="main-slider-image">
            <img src="{{asset('/images/p/slider1.jpg')}}">
        </div>
        <div class="main-slider-info">
            <div class="main-slider-info-a">
                <h2 class="main-slider-title">Rent Your Sparkle: Discover Your Style in Jewelry</h2>
                <div class="main-slider-desc">
                    Find the perfect jewelry for any occasion. Rent now<br>and shine with elegance and grace!
                </div>
                <div class="main-slider-button">
                    <a href="#">Browse jewelry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-slider-item">
        <div class="main-slider-image">
            <img src="{{asset('/images/p/slider1.jpg')}}">
        </div>
        <div class="main-slider-info">
            <div class="main-slider-info-a">
                <h2 class="main-slider-title">Rent Your Sparkle: Discover Your Style in Jewelry</h2>
                <div class="main-slider-desc">
                    Find the perfect jewelry for any occasion. Rent now<br>and shine with elegance and grace!
                </div>
                <div class="main-slider-button">
                    <a href="#">Browse jewelry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-slider-item">
        <div class="main-slider-image">
            <img src="{{asset('/images/p/slider1.jpg')}}">
        </div>
        <div class="main-slider-info">
            <div class="main-slider-info-a">
                <h2 class="main-slider-title">Rent Your Sparkle: Discover Your Style in Jewelry</h2>
                <div class="main-slider-desc">
                    Find the perfect jewelry for any occasion. Rent now<br>and shine with elegance and grace!
                </div>
                <div class="main-slider-button">
                    <a href="#">Browse jewelry</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main slider end -->
<!-- Categories start -->
<section class="categories">
    <div class="centered">
        <div class="j-head">
            <h2 class="j-title">{{__('site.browse_by_jewelery')}}</h2>
            <div class="j-desc">{{__('site.browse_by_jewelery_desc')}}</div>
        </div>
        <div class="category-list">
            @foreach($categories as $item)
            <div class="category-item">
                <div class="category-item-a">
                    <a href="{{route('products', ['category_id' => $item->id])}}">
                        <div class="category-image">
                            <img src="{{asset('/storage/'.$item->image)}}">
                        </div>
                        <div class="category-info">
                            <div class="ct-a">{{__('site.rent')}}</div>
                            <div class="ct-b">{{$item->title}}</div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Categories end -->
<!-- Products start -->
<section class="products">
    <div class="centered">
        <div class="j-head">
            <h2 class="j-title">{{__('site.popular_jewelery')}}</h2>
            <div class="j-desc">{{__('site.popular_jewelery_desc')}}</div>
        </div>
        <div class="product-carousel owl-carousel">
            <div class="product-item">
                <div class="product-item-a">
                    <a href="./">
                        <div class="product-image">
                            <img src="./images/p/product1.jpg">
                        </div>
                        <div class="product-info">
                            <div class="product-title">Cartier Juste un Clou</div>
                            <div class="product-price">
                                <div class="prc-a">$ 19.45 /</div>
                                <div class="prc-b"> Per Day</div>
                            </div>
                        </div>
                    </a>
                    <div class="product-fav"></div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item-a">
                    <a href="./">
                        <div class="product-image">
                            <img src="./images/p/product2.jpg">
                        </div>
                        <div class="product-info">
                            <div class="product-title">Doves by Doron Paloma</div>
                            <div class="product-price">
                                <div class="prc-a">$ 20.50 /</div>
                                <div class="prc-b"> Per Day</div>
                            </div>
                        </div>
                    </a>
                    <div class="product-fav"></div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item-a">
                    <a href="./">
                        <div class="product-image">
                            <img src="./images/p/product3.jpg">
                        </div>
                        <div class="product-info">
                            <div class="product-title">Green Emerald and Pave</div>
                            <div class="product-price">
                                <div class="prc-a">$ 34.00 /</div>
                                <div class="prc-b"> Per Day</div>
                            </div>
                        </div>
                    </a>
                    <div class="product-fav active"></div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item-a">
                    <a href="./">
                        <div class="product-image">
                            <img src="./images/p/product4.jpg">
                        </div>
                        <div class="product-info">
                            <div class="product-title">Van Cleef Red Alhambra</div>
                            <div class="product-price">
                                <div class="prc-a">$ 28.45 /</div>
                                <div class="prc-b"> Per Day</div>
                            </div>
                        </div>
                    </a>
                    <div class="product-fav"></div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item-a">
                    <a href="./">
                        <div class="product-image">
                            <img src="./images/p/product1.jpg">
                        </div>
                        <div class="product-info">
                            <div class="product-title">Cartier Juste un Clou</div>
                            <div class="product-price">
                                <div class="prc-a">$ 19.45 /</div>
                                <div class="prc-b"> Per Day</div>
                            </div>
                        </div>
                    </a>
                    <div class="product-fav"></div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item-a">
                    <a href="./">
                        <div class="product-image">
                            <img src="./images/p/product2.jpg">
                        </div>
                        <div class="product-info">
                            <div class="product-title">Doves by Doron Paloma</div>
                            <div class="product-price">
                                <div class="prc-a">$ 20.50 /</div>
                                <div class="prc-b"> Per Day</div>
                            </div>
                        </div>
                    </a>
                    <div class="product-fav"></div>
                </div>
            </div>    
        </div>
    </div>
</section>
<!-- Products end -->
@endsection

@section('js')

@endsection