@extends('site.home')
@section('title', __('site.products_page_title'))
@section('content')
    <!-- Favorites start -->
    <section class="my-profile my-fav">
        <div class="centered">
            <div class="my-profile-wrap">
                <div class="mpr-title">Favorites</div> 
            </div>


            @include('site.parts.profile')
       
            <div class="product-list">
                @foreach($favorites->items() as $item)
                    @if($item->product)
                    <div class="product-item">
                        <div class="product-item-a">
                            <a href="{{route('product', $item->product_id)}}">
                                <div class="product-image">
                                    <img src="{{asset('/storage/'.$item->product->cover)}}">
                                </div>
                                <div class="product-info">
                                    <div class="product-title">{{$item->product->title}}</div>
                                    <div class="product-price">
                                        <div class="prc-a">$ @if($item->product->sale_price != 0 or $item->product->sale_price != null) {{$item->product->sale_price}} @else {{$item->product->price}} @endif /</div>
                                        <div class="prc-b"> {{__('site.per_day')}}</div>
                                    </div>
                                </div>
                            </a>
                            <div class="product-fav  active " data-product-id="{{$item->product_id}}"></div>
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>

            {!! $favorites->appends($_GET)->links() !!}


        </div>
    </section>
    <!-- Favorites end -->
@endsection

@section('css')
    
@endsection

@section('js')

@endsection