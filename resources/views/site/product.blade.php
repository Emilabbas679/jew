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
                                <a href="https://www.youtube.com/watch?v=BSK1CqgJNaU" data-fancybox="gallery-vd">
                                <img src="{{asset('/images/p/nav-vid.jpg')}}" />
                                </a>
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
                    <div class="product-share">
                        <div class="ps-a">
                            <div class="ps-b">
                                <div class="share-bl">
                                    <div class="ps-top">
                                        <div class="ps-t">Share jewelry</div>
                                        <div class="ps-close"></div>
                                    </div>
                                    <div class="ps-info">Share this page with those who help you choose jewelry</div>
                                    <div class="share-list">
                                        <ul>
                                            <li class="s-fb">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=url" target="_blank"></a>
                                            </li>
                                            <li class="s-wp">
                                                <a href="https://api.whatsapp.com/send?text=metn - url" target="_blank"></a>
                                            </li>
                                            <li class="s-tg">
                                                <a href="https://telegram.me/share/url?url=url&text=metn" target="_blank"></a>
                                            </li>
                                            <li class="s-xt">
                                                <a href="test" target="_blank"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="share-url">
                                        <i></i>
                                        <div class="share-link">https://fancy.com/17231-Highland-Ave-APT-2B-Jamaica-NY-11432/2112794738_zpid/</div>
                                        <div id="copy-message">Kopyalandı</div>
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
<!-- Product view end -->
<!-- Product review start -->
<section class="review">
    <div class="centered">
        <div class="review-wrap">
            <div class="rv-title">Reviews</div>
            <div class="review-list">
                <div class="rv-item">
                    <div class="rv-author">Hannah Lewis</div>
                    <div class="rv-extra">
                        <div class="pr-rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="rv-date">July 19, 2024</div>
                    </div>
                    <div class="rv-text">Lorem ipsum dolor sit amet consectetur. Massa nulla consectetur tristique vitae odio elementum parturient.</div>
                </div>
                <div class="rv-item">
                    <div class="rv-author">Jennifer Garcia</div>
                    <div class="rv-extra">
                        <div class="pr-rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                            </ul>
                        </div>
                        <div class="rv-date">July 19, 2024</div>
                    </div>
                    <div class="rv-text">Lorem ipsum dolor sit amet consectetur. Lobortis ut tincidunt vitae velit. Nec et nisi at arcu. Eu augue laoreet scelerisque sapien amet sed tincidunt porta sed.</div>
                    <div class="rv-images">
                        <ul>
                            <li>
                                <a href="{{asset('/images/p/rv1.jpg')}}" data-fancybox="gallery-rv"><img src="{{asset('/images/p/rv1.jpg')}}" />
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/images/p/rv2.jpg')}}" data-fancybox="gallery-rv"><img src="{{asset('/images/p/rv2.jpg')}}" />
                                </a>
                            </li>
                            <li>
                                <a href="{{asset('/images/p/rv3.jpg')}}" data-fancybox="gallery-rv"><img src="{{asset('/images/p/rv3.jpg')}}" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="rv-item">
                    <div class="rv-author">Taylor Ethan</div>
                    <div class="rv-extra">
                        <div class="pr-rating">
                            <ul>
                                <li class="active"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="rv-date">July 19, 2024</div>
                    </div>
                    <div class="rv-text">Lorem ipsum dolor sit amet consectetur. In euismod orci sed volutpat dignissim.</div>
                </div>
                <div class="rv-item">
                    <div class="rv-author">Isabella Duston</div>
                    <div class="rv-extra">
                        <div class="pr-rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="rv-date">July 19, 2024</div>
                    </div>
                    <div class="rv-text">Lorem ipsum dolor sit amet consectetur. Integer mi purus neque turpis.</div>
                </div>
            </div>
            <div class="review-more">(5) more reviews</div>
        </div>
    </div>
</section>
<!-- Product review end -->
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
   <link media="screen" href="{{asset('/css/fancybox.css')}}" type="text/css" rel="stylesheet" />
@endsection

@section('js')
<script type="text/javascript" src="{{asset('/js/fancybox.umd.js')}}"></script>
<script>
$(document).ready(function() {

$('.sn-item').on('click', function() {
    var bigImageSrc = $(this).children('img').data('big-image'); 
    $('.sn-item').removeClass('active');
    $(this).addClass('active');
    $('#big-image').attr('src', bigImageSrc); 
  });

$('.sn-item:first').addClass('active');

/* $('.slider-video').on('click', function(e) {
    e.stopPropagation();
    $('body').addClass('vd-open')
    $('.slider-v').show()
}); */

/* $('.vd-close').on('click', function() {
    $('body').removeClass('vd-open')
    $('.slider-v').hide()
}); */

$('.share-url').click(function(){
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($('.share-link').text()).select();
    document.execCommand("copy");
    $temp.remove();

    $('#copy-message').fadeIn().delay(2000).fadeOut();
});

$('.pr-share').on('click', function(e) {
    e.stopPropagation();
    $('body').addClass('vd-open')
    $('.product-share').show()
});

$('.ps-close').on('click', function() {
    $('body').removeClass('vd-open')
    $('.product-share').hide()
});

Fancybox.bind('[data-fancybox="gallery-rv"]', {
    groupAll: true,
    Toolbar: {
        display: {
        left: ["infobar"],
        middle: [],
        right: [
            "thumbs",
            "close",
        ],
        }
        },
  Thumbs: {
    type: "classic",
  },
});

Fancybox.bind('[data-fancybox="gallery-vd"]', {
   
});

});
</script>
@endsection