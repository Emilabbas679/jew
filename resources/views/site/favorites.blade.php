@extends('site.home')
@section('title', __('site.products_page_title'))
@section('content')
    <!-- Favorites start -->
    <section class="my-profile my-fav">
        <div class="centered">
            <div class="my-profile-wrap">
                <div class="mpr-title">Favorites</div> 
            </div>
            <div class="my-profile-head">
                <ul>
                    <li><a href="./">Orders</a></li>
                    <li class="active"><a href="./">Favorites</a></li>
                    <li><a href="./">My reviews</a></li>
                    <li><a href="./">My account</a></li>
                </ul>
                <div class="m-logout">
                    <a href="#">Log out</a>
                </div>
            </div>
       
            <div class="product-list">
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
                        <div class="product-fav active"></div>
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
                        <div class="product-fav active"></div>
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
                        <div class="product-fav active"></div>
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
                        <div class="product-fav active"></div>
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
                        <div class="product-fav active"></div>
                    </div>
                </div>
            </div>
               
        </div>
    </section>
    <!-- Favorites end -->
@endsection

@section('css')
    
@endsection

@section('js')

@endsection