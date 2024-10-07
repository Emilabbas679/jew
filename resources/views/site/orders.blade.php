@extends('site.home')
@section('title', __('site.orders_page_title'))
@section('content')
    <!-- Orders start -->
    <section class="my-profile my-acc">
        <div class="centered">
            <div class="my-profile-wrap">
                <div class="mpr-title">Orders</div> 
            </div>
            <div class="my-profile-head">
                <ul>
                    <li class="active"><a href="./">Orders</a></li>
                    <li><a href="./">Favorites</a></li>
                    <li><a href="./">My reviews</a></li>
                    <li><a href="./">My account</a></li>
                </ul>
                <div class="m-logout">
                    <a href="#">Log out</a>
                </div>
            </div>
            <div class="my-profile-block">
                <div class="mp-wrap">
                    <div class="mp-title">Order list</div>
                    <div class="my-profile-head">
                        <ul>
                            <li class="active"><a href="./">All</a></li>
                            <li><a href="./">In progress</a></li>
                            <li><a href="./">Completed</a></li>
                            <li><a href="./">Cancelled</a></li>
                        </ul>
                    </div>
                    <div class="orders-list">
                        <div class="order-item">
                            <div class="order-top">
                                <div class="order-top-left">
                                    <div class="order-status finished">Finished</div>
                                    <div class="order-id"><div>Order ID:</div><span>#659347590</span></div>
                                </div>
                                <div class="order-top-right">
                                    <div class="order-i"><div>Order Date:</div><span>10 Sep, 2024</span></div>
                                    <div class="order-i">Total price:<span>$ 150.00</span></div>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/6X18YCAK2IFNf0qnxTqe9T8rO3YAmGee3wVuGIJ7.jpg">
                                    </a>
                                </div>
                                <div class="order-info">
                                    <div class="order-info-a">
                                        <h2 class="order-a-title"><a href="./">Emerald Shaped Morganite</a></h2>
                                        <div class="product-price p-dest">
                                            <div class="prc-a">$ 37.00  /</div>
                                            <div class="prc-b"> Per Day</div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="order-extra">
                                        <div class="order-extra-item">Type:<span>Rings</span></div>
                                        <div class="order-extra-item">Color:<span>Multicolor</span></div>
                                        <div class="order-extra-item">Material:<span>Gold</span></div>
                                    </div>
                                </div>
                                <div class="order-extra-c">
                                    <div class="product-price p-mob">
                                        <div class="prc-a">$ 37.00  /</div>
                                        <div class="prc-b"> Per Day</div>
                                    </div>
                                    <div class="order-date">10 Sep, 2024 - 17 Sep, 2024</div>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/oEmFFkF91spxiBcCqQhzu4vhIjxWKtNvVztihwCa.jpg">
                                        <div class="cr-promotion">50%</div>
                                    </a>
                                </div>
                                <div class="order-info">
                                    <div class="order-info-a">
                                        <h2 class="order-a-title"><a href="./">Emerald Shaped Morganite</a></h2>
                                        <div class="product-price p-dest">
                                            <div class="prc-a">$ 37.00  /</div>
                                            <div class="prc-b"> Per Day</div>
                                            <div class="prc-c">$ 74.00</div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="order-extra">
                                        <div class="order-extra-item">Type:<span>Rings</span></div>
                                        <div class="order-extra-item">Color:<span>Multicolor</span></div>
                                        <div class="order-extra-item">Material:<span>Gold</span></div>
                                    </div>
                                </div>
                                <div class="order-extra-c">
                                    <div class="product-price p-mob">
                                        <div class="prc-a">$ 37.00  /</div>
                                        <div class="prc-b"> Per Day</div>
                                        <div class="prc-c">$ 74.00</div>
                                    </div>
                                    <div class="order-date">10 Sep, 2024 - 17 Sep, 2024</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-item">
                            <div class="order-top">
                                <div class="order-top-left">
                                    <div class="order-status pending">Pending</div>
                                    <div class="order-id"><div>Order ID:</div><span>#659347590</span></div>
                                </div>
                                <div class="order-top-right">
                                    <div class="order-i"><div>Order Date:</div><span>10 Sep, 2024</span></div>
                                    <div class="order-i">Total price:<span>$ 150.00</span></div>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/8R2FLzFvEAXseA6JcECmL89dLVlqaam50tGfHEzm.jpg">
                                    </a>
                                </div>
                                <div class="order-info">
                                    <div class="order-info-a">
                                        <h2 class="order-a-title"><a href="./">Emerald Shaped Morganite</a></h2>
                                        <div class="product-price p-dest">
                                            <div class="prc-a">$ 37.00  /</div>
                                            <div class="prc-b"> Per Day</div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="order-extra">
                                        <div class="order-extra-item">Type:<span>Rings</span></div>
                                        <div class="order-extra-item">Color:<span>Multicolor</span></div>
                                        <div class="order-extra-item">Material:<span>Gold</span></div>
                                    </div>
                                </div>
                                <div class="order-extra-c">
                                    <div class="product-price p-mob">
                                        <div class="prc-a">$ 37.00  /</div>
                                        <div class="prc-b"> Per Day</div>
                                    </div>
                                    <div class="order-date">10 Sep, 2024 - 17 Sep, 2024</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-item">
                            <div class="order-top">
                                <div class="order-top-left">
                                    <div class="order-status cancelled">Cancelled</div>
                                    <div class="order-id"><div>Order ID:</div><span>#659347590</span></div>
                                </div>
                                <div class="order-top-right">
                                    <div class="order-i"><div>Order Date:</div><span>10 Sep, 2024</span></div>
                                    <div class="order-i">Total price:<span>$ 150.00</span></div>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/usZMAEAYBlF6XHU3VIPXfn4QX3GPCRMMhxMtdeYj.jpg">
                                    </a>
                                </div>
                                <div class="order-info">
                                    <div class="order-info-a">
                                        <h2 class="order-a-title"><a href="./">Emerald Shaped Morganite</a></h2>
                                        <div class="product-price p-dest">
                                            <div class="prc-a">$ 37.00  /</div>
                                            <div class="prc-b"> Per Day</div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="order-extra">
                                        <div class="order-extra-item">Type:<span>Rings</span></div>
                                        <div class="order-extra-item">Color:<span>Multicolor</span></div>
                                        <div class="order-extra-item">Material:<span>Gold</span></div>
                                    </div>
                                </div>
                                <div class="order-extra-c">
                                    <div class="product-price p-mob">
                                        <div class="prc-a">$ 37.00  /</div>
                                        <div class="prc-b"> Per Day</div>
                                    </div>
                                    <div class="order-date">10 Sep, 2024 - 17 Sep, 2024</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-item">
                            <div class="order-top">
                                <div class="order-top-left">
                                    <div class="order-status approved">Approved</div>
                                    <div class="order-id"><div>Order ID:</div><span>#659347590</span></div>
                                </div>
                                <div class="order-top-right">
                                    <div class="order-i"><div>Order Date:</div><span>10 Sep, 2024</span></div>
                                    <div class="order-i">Total price:<span>$ 150.00</span></div>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/nmHSRRAjVIKHg9jmFZ8V5OYpa2SlLqkXSOOKNsep.jpg">
                                    </a>
                                </div>
                                <div class="order-info">
                                    <div class="order-info-a">
                                        <h2 class="order-a-title"><a href="./">Emerald Shaped Morganite</a></h2>
                                        <div class="product-price p-dest">
                                            <div class="prc-a">$ 37.00  /</div>
                                            <div class="prc-b"> Per Day</div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="order-extra">
                                        <div class="order-extra-item">Type:<span>Rings</span></div>
                                        <div class="order-extra-item">Color:<span>Multicolor</span></div>
                                        <div class="order-extra-item">Material:<span>Gold</span></div>
                                    </div>
                                </div>
                                <div class="order-extra-c">
                                    <div class="product-price p-mob">
                                        <div class="prc-a">$ 37.00  /</div>
                                        <div class="prc-b"> Per Day</div>
                                    </div>
                                    <div class="order-date">10 Sep, 2024 - 17 Sep, 2024</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-item">
                            <div class="order-top">
                                <div class="order-top-left">
                                    <div class="order-status delivered">Delivered</div>
                                    <div class="order-id"><div>Order ID:</div><span>#659347590</span></div>
                                </div>
                                <div class="order-top-right">
                                    <div class="order-i"><div>Order Date:</div><span>10 Sep, 2024</span></div>
                                    <div class="order-i">Total price:<span>$ 150.00</span></div>
                                </div>
                            </div>
                            <div class="order-body">
                                <div class="order-image">
                                    <a href="./">
                                        <img src="https://but.az/storage/products/8R2FLzFvEAXseA6JcECmL89dLVlqaam50tGfHEzm.jpg">
                                    </a>
                                </div>
                                <div class="order-info">
                                    <div class="order-info-a">
                                        <h2 class="order-a-title"><a href="./">Emerald Shaped Morganite</a></h2>
                                        <div class="product-price p-dest">
                                            <div class="prc-a">$ 37.00  /</div>
                                            <div class="prc-b"> Per Day</div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="order-extra">
                                        <div class="order-extra-item">Type:<span>Rings</span></div>
                                        <div class="order-extra-item">Color:<span>Multicolor</span></div>
                                        <div class="order-extra-item">Material:<span>Gold</span></div>
                                    </div>
                                </div>
                                <div class="order-extra-c">
                                    <div class="product-price p-mob">
                                        <div class="prc-a">$ 37.00  /</div>
                                        <div class="prc-b"> Per Day</div>
                                        <div class="prc-c">$ 74.00</div>
                                    </div>
                                    <div class="order-date">10 Sep, 2024 - 17 Sep, 2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
        </div>
    </section>
    <!-- Orders end -->
@endsection

@section('css')
    
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            

        });
    </script>
@endsection