@extends('site.home')
@section('title', __('site.home_page_title'))
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
                <div class="owl-dots-m"></div>
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
<section class="products p-m">
    <div class="centered">
        <div class="j-head">
            <h2 class="j-title">{{__('site.popular_jewelery')}}</h2>
            <div class="j-desc">{{__('site.popular_jewelery_desc')}}</div>
        </div>
        <div class="product-carousel owl-carousel">
            @foreach($products as $item)
            <div class="product-item">
                <div class="product-item-a">
                    <a href="{{route('product', $item->id)}}">
                        <div class="product-image">
                            <img src="{{asset('/storage/'.$item->cover)}}">
                        </div>
                        <div class="product-info">
                            <div class="product-title">{{$item->title}}</div>
                            <div class="product-price">
                                <div class="prc-a">$ @if($item->sale_price != 0 or $item->sale_price != null) {{$item->sale_price}} @else {{$item->price}} @endif /</div>
                                <div class="prc-b"> {{__('site.per_day')}}</div>
                            </div>
                        </div>
                    </a>
                    <div class="product-fav @if(in_array($item->id, $global_user_favorites)) active @endif" data-product-id="{{$item->id}}"></div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Products end -->
@endsection

@section('js')

@endsection