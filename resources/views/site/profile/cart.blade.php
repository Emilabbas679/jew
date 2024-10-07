@extends('site.home')
@section('title', __('site.cart_title'))
@section('content')
    <!-- Cart start -->
    <section class="cart-page">
        <div class="centered">
            <div class="cart-page-a">
                <div class="cart-top">
                    <div class="cart-left">
                        <div class="ct-title">Cart</div>
                        <div class="ct-count">{{count($items)}} jewelry</div>
                        <div class="cart-list">

                            @foreach($items as $item)
                                <div class="cart-item">
                                    <div class="cart-image">
                                        <a href="{{route('product', $item->product->id)}}">
                                            <img src="{{asset('/storage/'.$item->product->cover)}}">
                                            @if($item->product->sale_price != 0 and $item->product->sale_price != null)
                                                <div class="cr-promotion">{{(int) (100-($item->product->sale_price * 100/$item->product->price))}}%</div>
                                            @endif

                                        </a>
                                    </div>
                                    <div class="cart-info">
                                        <div class="cart-info-a">
                                            <a href="{{route('product', $item->product->id)}}">
                                                <h2 class="ct-pr-title">{{$item->product->title}}</h2>
                                            </a>
                                            <div class="product-fav @if(in_array($item->product_id, $global_user_favorites)) active @endif" data-product-id="{{$item->product_id}}"></div>
                                            <div class="product-delete cart-delete" data-cart-id="{{$item->id}}"></div>
                                        </div>
                                        <div class="cart-info-b">
                                            <div class="cart-dates">
                                                <div class="ctd">Delivery Date:<b>{{date('d.m.Y', strtotime($item->delivery_date))}}</b></div>
                                                <div class="ctd">Return Date:<b>{{date('d.m.Y', strtotime($item->return_date))}}</b></div>
                                            </div>
                                            <div class="cart-price">
                                                <div class="product-price">
                                                    <div class="prc-a">$ @if($item->product->sale_price != 0 or $item->product->sale_price != null) {{$item->product->sale_price}} @else {{$item->product->price}} @endif/</div>
                                                    <div class="prc-b"> {{__('site.per_day')}}</div>

                                                    @if($item->product->sale_price != 0 and $item->product->sale_price != null)
                                                        <div class="prc-c">$ {{$item->product->price}}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-price bs-m">
                                        <div class="prc-a">$ @if($item->product->sale_price != 0 or $item->product->sale_price != null) {{$item->product->sale_price}} @else {{$item->product->price}} @endif/</div>
                                        <div class="prc-b"> {{__('site.per_day')}}</div>

                                        @if($item->product->sale_price != 0 and $item->product->sale_price != null)
                                            <div class="prc-c">$ {{$item->product->price}}</div>
                                        @endif

                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                    <div class="cart-right">
                        <div class="ct-a-info">
                            <p>Pay the rest in-store.</p>
                            <ul>
                                <li>Pick up from our store; no home delivery.</li>
                                <li><a href="./contact">Contact page</a> for our address.</li>
                            </ul>
                        </div>
                        <div class="ct-promo">
                            <div class="ct-promo-t">Enter the promo code number</div>
                            <div class="ct-promo-form">
                                <div class="ct-promo-input">
                                    <input type="text" placeholder="Promo code">
                                </div>
                                <div class="ct-promo-button">
                                    <button type="submit" disabled>Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="ch-calculate">
                            <div class="calc-item">
                                <div class="calc-l">Total price:</div>
                                <div class="calc-r">{{$prices['total']}} $</div>
                            </div>
{{--                            <div class="calc-item">--}}
{{--                                <div class="calc-l">10% of the product:</div>--}}
{{--                                <div class="calc-r">44 $</div>--}}
{{--                            </div>--}}
                            <div class="calc-item">
                                <div class="calc-l">Discounts and promotions:</div>
                                <div class="calc-r c-red">-{{$prices['total']-$prices['total_price']}} $</div>
                            </div>
                            <div class="calc-item">
                                <div class="calc-l cc-a">Total price:</div>
                                <div class="calc-r cc-b">{{$prices['total_price']}} $</div>
                            </div>
                        </div>
                        <div class="pr-check">
                            <input id="e-c" type="checkbox">
                            <label for="e-c">I have read and approve the <a href="./">Preliminary Information Conditions</a> and <a href="./">Distance Sales Agreement.</a></label>
                        </div>
                        <div class="pr-button">
                            <button type="submit" class="m-md">Checkout</button>
                        </div>
                        <div class="m-modal" id="pr-error">
                            <div class="ps-a">
                                <div class="ps-b">
                                    <div class="p-alert neg">
                                        <div class="p-alert-close"></div>
                                        <div class="p-alert-icon"></div>
                                        <div class="p-alert-a">Error!</div>
                                        <div class="p-alert-b">Lorem ipsum dolor sit amet consectetur. Diam massa neque velit tortor.</div>
                                        <div class="pr-button">
                                            <button type="submit">Try again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-modal" id="pr-success">
                            <div class="ps-a">
                                <div class="ps-b">
                                    <div class="p-alert pos">
                                        <div class="p-alert-close"></div>
                                        <div class="p-alert-icon"></div>
                                        <div class="p-alert-a">Success!</div>
                                        <div class="p-alert-b">Lorem ipsum dolor sit amet consectetur. Diam massa neque velit tortor.</div>
                                        <div class="pr-button">
                                            <button type="submit">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart end -->
    <!-- Products start -->
    <section class="products">
        <div class="centered">
            <div class="j-head">
                <h2 class="j-title j-left">Offered jewelry</h2>
            </div>
            <div class="product-carousel owl-carousel">
                <div class="product-item">
                    <div class="product-item-a">
                        <a href="./">
                            <div class="product-image">
                                <img src="{{asset('/images/p/product1.jpg')}}">
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
                                <img src="{{asset('/images/p/product2.jpg')}}">
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
                                <img src="{{asset('/images/p/product3.jpg')}}">
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
                                <img src="{{asset('/images/p/product4.jpg')}}">
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
                                <img src="{{asset('/images/p/product1.jpg')}}">
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
                                <img src="{{asset('/images/p/product2.jpg')}}">
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

@section('css')

@endsection

@section('js')

    <script>
        $(document).ready(function() {

            $('.ct-promo-input input').on('input', function() {
                var inputLength = $(this).val().length;
                if (inputLength > 5) {
                    $('.ct-promo-button button').prop('disabled', false);
                } else {
                    $('.ct-promo-button button').prop('disabled', true);
                }
            });

            $('.m-md').on('click', function(e) {
                e.stopPropagation();
                if($('#e-c').prop('checked') == true) {
                    $('#pr-success').show();
                } else {
                    $('#pr-error').show();
                }
                $('body').addClass('vd-open')
            });

            $('.p-alert-close').on('click', function() {
                $('body').removeClass('vd-open')
                $(this).parents('.m-modal').hide()
            });

        });

        $(".cart-delete").click(function (){
            let cart_id = $(this).attr('data-cart-id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ secure_url('/profile/cart/delete') }}",
                method: "POST",
                data: {
                    cart_id: cart_id
                },
                success: function(response) {
                    window.location.reload()
                }
            });
        })

    </script>
@endsection
