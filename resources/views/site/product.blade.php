@extends('site.home')
@section('content')
<!-- Product view start -->
<section class="product-view">
    <div class="centered">
        <div class="product-view-wrap">
            <div class="product-view-a">
                <div class="product-view-left">
                   <div class="product-gallery">
                        <div class="slider-thumbs">
                            <div class="slider-video">
                                <img src="{{asset('/images/p/nav-vid.jpg')}}">
                            </div>
                            <div class="slider-v">
                                <div class="vd-close"></div>
                                <div class="slider-vd-a">
                                    <div class="slider-vd-b">
                                        <div class="slider-vd">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/BSK1CqgJNaU?si=ie5JKdEyzo0rYa8s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-nav">
                                <div class="sn-item">
                                    <img src="{{asset('/images/p/nav1.jpg?V1')}}" data-big-image="{{asset('/images/p/big1.jpg')}}">
                                </div>
                                <div class="sn-item">
                                    <img src="{{asset('/images/p/nav2.jpg?V1')}}" data-big-image="{{asset('/images/p/big2.jpg')}}">
                                </div>
                                <div class="sn-item">
                                    <img src="{{asset('/images/p/nav3.jpg?V1')}}" data-big-image="{{asset('/images/p/big3.jpg')}}">
                                </div>
                                <div class="sn-item">
                                    <img src="{{asset('/images/p/nav1.jpg?V1')}}" data-big-image="{{asset('/images/p/big1.jpg')}}">
                                </div>
                                <div class="sn-item">
                                    <img src="{{asset('/images/p/nav2.jpg?V1')}}" data-big-image="{{asset('/images/p/big2.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="slider-big-image">
                            <img src="{{asset('/images/p/big1.jpg')}}" id="big-image">
                        </div>
                    </div>
                </div>
                <div class="product-view-right">
                    <div class="product-view-review">
                        <div class="pr-rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="rating-to"><a href="./">See (4) reviews</a></div>
                    </div>
                    <div class="product-price">
                        <div class="prc-a">$ 19.45 /</div>
                        <div class="prc-b"> Per Day</div>
                        <div class="prc-c">$ 74.00</div>
                    </div>
                    <div class="price-day">
                        <div class="prd-a">$ 6.850 /</div>
                        <div class="prd-b">Market price</div>
                    </div>
                    <div class="product-view-extra">
                        <div class="pr-reserve">Reserve this piece</div>
                        <div class="pr-fav"></div>
                        <div class="pr-share"></div>
                    </div>
                    <h2 class="product-view-title">Pear Shaped Morganite and Diamonds Cocktail </h2>
                    <div class="product-about">
                        <div class="pr-about-t">About jewelry</div>
                        <div class="pr-about-text">Add a touch of elegance to your ensemble with this stunning Pear Shaped Morganite and Diamonds Cocktail Ring, available for rent.</div>
                    </div>
                    <div class="product-spec">
                        <div class="pr-spec-t">Product specifications</div>
                        <div class="pr-spec-list">
                            <ul>
                                <li>Type:<b>Rings</b></li>
                                <li>Size:<b>14, 15, 16, 17</b></li>
                                <li>Occasion:<b>Wedding</b></li>
                                <li>Color:<b>Multicolor</b></li>
                                <li>Material:<b>Gold</b></li>
                                <li>Designers:<b>Adina Reyter</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<!-- Product view end -->
<!-- Products start -->
<section class="products br-b">
    <div class="centered">
        <div class="j-head">
            <h2 class="j-title">You Might Also Like</h2>
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
<!-- Products start -->
<section class="products br-b">
    <div class="centered">
        <div class="j-head">
            <h2 class="j-title">Recently Viewed</h2>
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
<!-- Products start -->
<section class="products">
    <div class="centered">
        <div class="j-head">
            <h2 class="j-title">People Also Rented</h2>
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

$('.sn-item').on('click', function() {
    var bigImageSrc = $(this).children('img').data('big-image'); 
    $('.sn-item').removeClass('active');
    $(this).addClass('active');
    $('#big-image').attr('src', bigImageSrc); 
  });

$('.sn-item:first').addClass('active');

$('.slider-video').on('click', function(e) {
 e.stopPropagation();
    $('body').addClass('vd-open')
    $('.slider-v').show()
})

$('.vd-close').on('click', function() {
    $('body').removeClass('vd-open')
    $('.slider-v').hide()
})

});
</script>
@endsection