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
                    <div class="ct-count">2 jewelry</div>
                    <div class="cart-list">
                        <div class="cart-item">
                            <div class="cart-image">
                                <a href="./">
                                    <img src="https://but.az/storage/products/6X18YCAK2IFNf0qnxTqe9T8rO3YAmGee3wVuGIJ7.jpg">
                                </a>
                            </div>
                            <div class="cart-info">
                                <div class="cart-info-a">
                                    <a href="./">
                                        <h2 class="ct-pr-title">Emerald Shaped Morganite</h2>
                                    </a>
                                    <div class="product-fav"></div>
                                    <div class="product-delete"></div>
                                </div>
                                <div class="cart-info-b">
                                    <div class="cart-dates">
                                        <div class="ctd">Delivery Date:<b>10 Sep, 2024</b></div>
                                        <div class="ctd">Return Date:<b>17 Sep, 2024</b></div>
                                    </div>
                                    <div class="cart-price">
                                        <div class="product-price">
                                            <div class="prc-a">$ 37.00  /</div>
                                            <div class="prc-b"> Per Day</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="cart-image">
                                <a href="./">
                                    <img src="https://but.az/storage/products/oEmFFkF91spxiBcCqQhzu4vhIjxWKtNvVztihwCa.jpg">
                                    <div class="cr-promotion">50%</div>
                                </a>
                            </div>
                            <div class="cart-info">
                                <div class="cart-info-a">
                                    <a href="./">
                                        <h2 class="ct-pr-title">Emerald Shaped Morganite</h2>
                                    </a>
                                    <div class="product-fav"></div>
                                    <div class="product-delete"></div>
                                </div>
                                <div class="cart-info-b">
                                    <div class="cart-dates">
                                        <div class="ctd">Delivery Date:<b>10 Sep, 2024</b></div>
                                        <div class="ctd">Return Date:<b>17 Sep, 2024</b></div>
                                    </div>
                                    <div class="cart-price">
                                        <div class="product-price">
                                            <div class="prc-a">$ 37.00  /</div>
                                            <div class="prc-b">Per Day</div>
                                            <div class="prc-c">$ 74.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="cart-image">
                                <a href="./">
                                    <img src="https://but.az/storage/products/8R2FLzFvEAXseA6JcECmL89dLVlqaam50tGfHEzm.jpg">
                                </a>
                            </div>
                            <div class="cart-info">
                                <div class="cart-info-a">
                                    <a href="./">
                                        <h2 class="ct-pr-title">Emerald Shaped Morganite</h2>
                                    </a>
                                    <div class="product-fav"></div>
                                    <div class="product-delete"></div>
                                </div>
                                <div class="cart-info-b">
                                    <div class="cart-dates">
                                        <div class="ctd">Delivery Date:<b>10 Sep, 2024</b></div>
                                        <div class="ctd">Return Date:<b>17 Sep, 2024</b></div>
                                    </div>
                                    <div class="cart-price">
                                        <div class="product-price">
                                            <div class="prc-a">$ 37.00  /</div>
                                            <div class="prc-b"> Per Day</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <div class="calc-r">220 $</div>
                        </div>
                        <div class="calc-item">
                            <div class="calc-l">10% of the product:</div>
                            <div class="calc-r">44 $</div>
                        </div>
                        <div class="calc-item">
                            <div class="calc-l">Discounts and promotions:</div>
                            <div class="calc-r c-red">-5 $</div>
                        </div>
                        <div class="calc-item">
                            <div class="calc-l cc-a">Total price:</div>
                            <div class="calc-r cc-b">39 $</div>
                        </div>
                    </div>
                    <div class="pr-check">
                        <input id="e-c" type="checkbox">
                        <label for="e-c">I have read and approve the <a href="./">Preliminary Information Conditions</a> and <a href="./">Distance Sales Agreement.</a></label>
                    </div>
                    <div class="pr-button">
                        <button type="submit">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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

});

</script>
@endsection
