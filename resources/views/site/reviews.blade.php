@extends('site.home')
@section('title', __('site.reviews_page_title'))
@section('content')
    <!-- Reviews start -->
    <section class="my-profile my-acc">
        <div class="centered">
            <div class="my-profile-wrap">
                <div class="mpr-title">My reviews</div> 
            </div>
            <div class="my-profile-head">
                <ul>
                    <li><a href="./">Orders</a></li>
                    <li><a href="./">Favorites</a></li>
                    <li class="active"><a href="./">My reviews</a></li>
                    <li><a href="./">My account</a></li>
                </ul>
                <div class="m-logout">
                    <a href="#">Log out</a>
                </div>
            </div>
            <div class="my-profile-block">
                <div class="mp-wrap">
                    <div class="mp-title">My product reviews</div>
                    <div class="my-profile-head">
                        <ul>
                            <li class="active"><a href="./">Rate (37)</a></li>
                            <li><a href="./">Approved (24)</a></li>
                        </ul>
                    </div>
                    <div class="reviews-list">
                        <div class="rw-item">
                            <div class="rw-item-a">
                                <div class="rw-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/6X18YCAK2IFNf0qnxTqe9T8rO3YAmGee3wVuGIJ7.jpg">
                                    </a>
                                </div>
                                <div class="rw-info">
                                    <div class="rw-title"><a href="./">Emerald Shaped Morganite</a></div>
                                    <div class="rv-z">Product rating:</div>
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
                                        <div class="rv-date-b">Delivery Date: <span>July 19, 2024</span></div>
                                    </div>
                                </div>
                                <div class="rate-product m-md" data-target="#rate-pr">Rate the product</div>
                            </div>
                            <div class="product-share m-modal" id="rate-pr">
                                <div class="ps-a">
                                    <div class="ps-b">
                                        <div class="share-bl">
                                            <div class="ps-top">
                                                <div class="ps-t">Rate the product</div>
                                                <div class="ps-close"></div>
                                            </div>
                                            <div class="ps-info">Lorem ipsum dolor sit amet consectetur. Diam massa neque velit tortor.</div>
                                            <div class="rate-v">
                                                <span>Rate</span>
                                            </div>
                                            <div class="rt-rating">
                                                <ul>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                            <div class="rt-comment">
                                                <textarea placeholder="Reviews"></textarea>
                                            </div>
                                            <div class="rt-upload">
                                                <div class="rt-upload-f">
                                                    <input id="photo" type="file">
                                                    <label for="photo" class="rt-upload-ft">
                                                    Upload photo
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="pr-button"><button type="submit">Rate</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rw-item">
                            <div class="rw-item-a">
                                <div class="rw-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/oEmFFkF91spxiBcCqQhzu4vhIjxWKtNvVztihwCa.jpg">
                                    </a>
                                </div>
                                <div class="rw-info">
                                    <div class="rw-title"><a href="./">Traverse Circles Blue</a></div>
                                    <div class="rv-z">Product rating:</div>
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
                                        <div class="rv-date-b">Delivery Date: <span>July 19, 2024</span></div>
                                    </div>
                                </div>
                                <div class="rate-product">Rate the product</div>
                            </div>
                        </div>
                        <div class="rw-item">
                            <div class="rw-item-a">
                                <div class="rw-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/nmHSRRAjVIKHg9jmFZ8V5OYpa2SlLqkXSOOKNsep.jpg">
                                    </a>
                                </div>
                                <div class="rw-info">
                                    <div class="rw-title"><a href="./">Forget Me Not Shamrock</a></div>
                                    <div class="rv-z">Product rating:</div>
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
                                        <div class="rv-date-b">Delivery Date: <span>July 19, 2024</span></div>
                                    </div>
                                </div>
                                <div class="rate-product">Rate the product</div>
                            </div>
                        </div>
                        <div class="rw-item">
                            <div class="rw-item-a">
                                <div class="rw-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/8R2FLzFvEAXseA6JcECmL89dLVlqaam50tGfHEzm.jpg">
                                    </a>
                                </div>
                                <div class="rw-info">
                                    <div class="rw-title"><a href="./">Van Cleef Red Alhambra</a></div>
                                    <div class="rv-z">Product rating:</div>
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
                                        <div class="rv-date-b">Delivery Date: <span>July 19, 2024</span></div>
                                    </div>
                                </div>
                                <div class="rate-product">Rate the product</div>
                            </div>
                        </div>
                        <div class="rw-item">
                            <div class="rw-item-a">
                                <div class="rw-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/usZMAEAYBlF6XHU3VIPXfn4QX3GPCRMMhxMtdeYj.jpg">
                                    </a>
                                </div>
                                <div class="rw-info">
                                    <div class="rw-title"><a href="./">Cartier Juste un Clou</a></div>
                                    <div class="rv-z">Product rating:</div>
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
                                        <div class="rv-date-b">Delivery Date: <span>July 19, 2024</span></div>
                                    </div>
                                </div>
                                <div class="rate-product">Rate the product</div>
                            </div>
                        </div>
                        <div class="rw-item">
                            <div class="rw-item-a">
                                <div class="rw-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/6X18YCAK2IFNf0qnxTqe9T8rO3YAmGee3wVuGIJ7.jpg">
                                    </a>
                                </div>
                                <div class="rw-info">
                                    <div class="rw-title"><a href="./">Emerald Shaped Morganite</a></div>
                                    <div class="rv-z">Product rating:</div>
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
                                        <div class="rv-date-b">Delivery Date: <span>July 19, 2024</span></div>
                                    </div>
                                </div>
                                <div class="rate-product">Rate the product</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
        </div>
    </section>
    <!-- Reviews end -->
@endsection

@section('css')
    
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            
            $('.m-md').on('click', function(e) {
                e.stopPropagation();
                $(($(this).attr("data-target"))).show();
                $('body').addClass('vd-open')
            });

            $('.ps-close').on('click', function() {
                $('body').removeClass('vd-open')
                $(this).parents('.m-modal').hide()
            });

        });
    </script>
@endsection