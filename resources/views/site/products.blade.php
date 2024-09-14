@extends('site.home')
@section('title', __('site.products_page_title'))
@section('content')
    <!-- Products start -->
    <section class="products-page">
        <div class="centered">
            <div class="j-head">
                <h2 class="j-title">Rings jewelry</h2>
                <div class="j-count">Showing all 15 results</div>
            </div>
            <div class="j-filter">
                <div class="j-filter-list">
                    <div class="j-filter-item">
                        <div class="j-select-a">
                            <select class="j-select j-cat" name="category_id">
                                <option></option>
                                @foreach($categories as $item)
                                <option value="{{$item->id}}" @if($request->has('category_id') and $request->category_id == $item->id) selected @endif>{{$item->title}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="j-filter-item">
                        <div class="j-select-a">
                            <select class="j-select j-sub" name="occasion_id">
                                <option></option>
                                @foreach($occasions as $item)
                                    <option value="{{$item->id}}" @if($request->has('occasion_id') and $request->occasion_id == $item->id) selected @endif>{{$item->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="j-filter-item">
                        <div class="j-filter-a">
                            <div class="j-filter-z j-price">
                                <div class="j-value"></div>
                                <div class="j-placeholder">Price range</div>
                                <span class="j-down"></span>
                                <span class="j-close"></span>
                            </div>
                            <div class="j-md">
                                <div class="j-range">
                                    <div id="j-slider"></div>
                                    <div class="j-range-inputs">
                                        <div class="j-input">
                                            <div class="j-input-val">
                                                <span id="range-min">0</span> <span> $</span>
                                            </div>
                                        </div>
                                        <div class="j-input">
                                            <div class="j-input-val">
                                                <span id="range-max">1000</span>
                                                <span> $</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="j-filter-item">
                        <div class="j-select-a">
                            <select class="j-select j-material" name="material_id">
                                <option></option>
                                @foreach($materials as $item)
                                    <option value="{{$item->id}}" @if($request->has('material_id') and $request->material_id == $item->id) selected @endif>{{$item->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="j-filter-item">
                        <div class="j-filter-a">
                            <div class="j-filter-z j-color">
                                <div class="j-value"></div>
                                <div class="j-placeholder">Colors</div>
                                <span class="j-down"></span>
                                <span class="j-close"></span>
                            </div>
                            <div class="j-md">
                                <div class="j-color-list">
                                    <ul id="color-list">
                                        @foreach($colors as $item)
                                        <li>
                                            <input id="{{$item->title}}" type="checkbox" name="color" value="{{$item->id}}">
                                            <label for="{{$item->title}}">
                                                <i style="background: {{$item->hex}}; border: {{$item->hex}}"></i><span>{{$item->title}}</span>
                                            </label>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="j-filter-item">
                        <div class="j-filter-a">
                            <div class="j-filter-z j-designer">
                                <div class="j-value"></div>
                                <div class="j-placeholder">Designers</div>
                                <span class="j-down"></span>
                                <span class="j-close"></span>
                            </div>
                            <div class="j-md">
                                <div class="j-designer-list">
                                    <ul id="designer-list">
                                        @foreach($designers as $item)
                                        <li>
                                            <input id="d{{$item->id}}" type="checkbox" name="designer" value="{{$item->id}}">
                                            <label for="d{{$item->id}}">{{$item->title}}</label>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="j-filter-item">
                        <div class="j-select-a">
                            <select class="j-select j-sort" name="sort">
                                <option></option>
                                <option>Popular</option>
                                <option>Alpabetic</option>
                                <option>Price</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-list">
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
                                <img src="./images/p/product5.jpg">
                            </div>
                            <div class="product-info">
                                <div class="product-title">Traverse Circles Blue</div>
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
                                <img src="./images/p/product6.jpg">
                                <div class="pr-promotion">50%</div>
                            </div>
                            <div class="product-info">
                                <div class="product-title">Emerald Shaped Morganite</div>
                                <div class="product-price">
                                    <div class="prc-a">$ 37.00 /</div>
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
                                <img src="./images/p/product7.jpg">
                            </div>
                            <div class="product-info">
                                <div class="product-title">Serpentine Style</div>
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
                                <img src="./images/p/product8.jpg">
                            </div>
                            <div class="product-info">
                                <div class="product-title">Bypass Baguette Eco</div>
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
                                <img src="./images/p/product9.jpg">
                            </div>
                            <div class="product-info">
                                <div class="product-title">Forget Me Not Shamrock</div>
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
                                <img src="./images/p/product10.jpg">
                            </div>
                            <div class="product-info">
                                <div class="product-title">White and Blue</div>
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
                                <img src="./images/p/product7.jpg">
                            </div>
                            <div class="product-info">
                                <div class="product-title">Serpentine Style</div>
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
                                <img src="./images/p/product6.jpg">
                                <div class="pr-promotion">50%</div>
                            </div>
                            <div class="product-info">
                                <div class="product-title">Emerald Shaped Morganite</div>
                                <div class="product-price">
                                    <div class="prc-a">$ 37.00 /</div>
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
                                <img src="./images/p/product5.jpg">
                            </div>
                            <div class="product-info">
                                <div class="product-title">Traverse Circles Blue</div>
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
            </div>
            <div class="pagination">
                <ul>
                    <li><a class="p-prev p-d" href="/"></a></li>
                    <li><span class="active">1</span></li>
                    <li><a href="/">2</a></li>
                    <li><a href="/">3</a></li>
                    <li><a href="/">4</a></li>
                    <li><span>...</span></li>
                    <li><a href="/">24</a></li>
                    <li><a class="p-next p-d" href="/"></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Products end -->
@endsection

@section('css')
    <link media="screen" href="{{asset('/css/select2.min.css')}}" type="text/css" rel="stylesheet" />
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/nouislider.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.j-select').select2({
                minimumResultsForSearch: -1,
                width: '100%',
                placeholder: "Category",
                allowClear: true
            });

            $('.j-sub').select2({
                minimumResultsForSearch: -1,
                width: '100%',
                placeholder: "Occasion",
                allowClear: true
            });

            $('.j-material').select2({
                minimumResultsForSearch: -1,
                width: '100%',
                placeholder: "Material",
                allowClear: true
            });

            $('.j-sort').select2({
                minimumResultsForSearch: -1,
                width: '100%',
                placeholder: "Sort",
                allowClear: true
            });

            var slider = document.getElementById('j-slider');

            noUiSlider.create(slider, {
                start: [0, 1000],
                connect: true,
                range: {
                    'min': 0,
                    'max': 1000
                },
                step: 10,
            });

            var valuesDivs = [
                document.getElementById('range-min'),
                document.getElementById('range-max'),
            ];

            slider.noUiSlider.on('update', function (values, handle) {
                valuesDivs[handle].innerHTML = parseFloat((values[handle]));
            });

            const checkPrice = function() {
                if($('#range-min').text() != 0 || $('#range-max').text() != 1000) {
                    $('.j-price').children('.j-value').html('<div class="j-value">' + $('#range-min').text() + ' - ' + $('#range-max').text()+ ' $ </div>')
                    $('.j-price').children('.j-placeholder').text('')
                    $('.j-price').children('.j-down').css('display', 'none')
                    $('.j-price').children('.j-close').css('display', 'block')
                } else if($('#range-min').text() == 0 && $('#range-max').text() == 1000) {
                    $('.j-price').children('.j-value').html('')
                    $('.j-price').children('.j-placeholder').text('Price range');
                    $('.j-price').children('.j-down').css('display', 'block')
                    $('.j-price').children('.j-close').css('display', 'none')
                }
            }

            const checkColor = function() {
                if($('#color-list input[type="checkbox"]').is(':checked')) {

                    var labels =$('#color-list input[type="checkbox"]:checked').map(function() {
                        return $(this).next('label').children('span').text();
                    }).get();

                    $('.j-color').children('.j-down').hide();
                    $('.j-color').children('.j-close').show();
                    $('.j-color').children('.j-placeholder').hide();
                    $('.j-color').children('.j-value').text(labels.join(', ')).show();
                } else {
                    $('.j-color').children('.j-down').show();
                    $('.j-color').children('.j-close').hide();
                    $('.j-color').children('.j-placeholder').show();
                    $('.j-color').children('.j-value').text('').hide();
                }
            }

            const checkDesigner = function() {
                if($('#designer-list input[type="checkbox"]').is(':checked')) {

                    var labels =$('#designer-list input[type="checkbox"]:checked').map(function() {
                        return $(this).next('label').text();
                    }).get();

                    $('.j-designer').children('.j-down').hide();
                    $('.j-designer').children('.j-close').show();
                    $('.j-designer').children('.j-placeholder').hide();
                    $('.j-designer').children('.j-value').text(labels.join(', ')).show();
                } else {
                    $('.j-designer').children('.j-down').show();
                    $('.j-designer').children('.j-close').hide();
                    $('.j-designer').children('.j-placeholder').show();
                    $('.j-designer').children('.j-value').text('').hide();
                }
            }

            $('.j-md').on('click', function(e) {
                e.stopPropagation()
            })

            let isPriceOpen = false;
            let isColorOpen = false;
            let isDesignerOpen = false;

            $('.j-price').on('click', function(e) {
                e.stopPropagation();
                $('.j-md').hide()
                $('.j-filter-z').removeClass('opened');
                isColorOpen = false;
                isDesignerOpen = false
                isPriceOpen = !isPriceOpen;
                if(!isPriceOpen) {
                    $(this).removeClass('opened')
                    $(this).next('.j-md').hide()
                } else {
                    $(this).addClass('opened')
                    $(this).next('.j-md').show()
                }
                checkPrice();
            })

            $('.j-price').on('click', '.j-close', function(e) {
                e.stopPropagation()
                slider.noUiSlider.set([0, 1000]);
                $('.j-price').children('.j-value').html('')
                $('.j-price').children('.j-placeholder').text('Price range');
                $('.j-price').children('.j-down').css('display', 'block')
                $('.j-price').children('.j-close').css('display', 'none')
            });

            $('.j-color').on('click', function(e) {
                e.stopPropagation();
                $('.j-md').hide()
                $('.j-filter-z').removeClass('opened');
                isPriceOpen = false;
                isDesignerOpen = false;
                isColorOpen = !isColorOpen;
                if(!isColorOpen) {
                    $(this).removeClass('opened')
                    $(this).next('.j-md').hide()
                } else {
                    $(this).addClass('opened')
                    $(this).next('.j-md').show()
                }
                checkColor();

            })

            $('.j-color').on('click', '.j-close', function(e) {
                e.stopPropagation();
                $('#color-list input[type="checkbox"]').prop('checked', false);

                $('.j-color').children('.j-down').show();
                $('.j-color').children('.j-close').hide();
                $('.j-color').children('.j-placeholder').show();
                $('.j-color').children('.j-value').text('').hide();
            })

            $('#color-list').on('click', 'li', function () {
                checkColor();
            })

            $('.j-designer').on('click', function(e) {
                e.stopPropagation();
                $('.j-md').hide()
                $('.j-filter-z').removeClass('opened');
                isPriceOpen = false;
                isColorOpen = false;
                isDesignerOpen = !isDesignerOpen;
                if(!isDesignerOpen) {
                    $(this).removeClass('opened')
                    $(this).next('.j-md').hide()
                } else {
                    $(this).addClass('opened')
                    $(this).next('.j-md').show()
                }
                checkDesigner();

            })

            $('.j-designer').on('click', '.j-close', function(e) {
                e.stopPropagation();
                $('#designer-list input[type="checkbox"]').prop('checked', false);

                $('.j-designer').children('.j-down').show();
                $('.j-designer').children('.j-close').hide();
                $('.j-designer').children('.j-placeholder').show();
                $('.j-designer').children('.j-value').text('').hide();
            })

            $('#designer-list').on('click', 'li', function () {
                checkDesigner();
            })

            $(document).on('click', function() {
                if(isPriceOpen) {
                    isPriceOpen = false;
                    checkPrice();
                    $('.j-price').removeClass('opened');
                    $('.j-md').hide()
                }

                if(isColorOpen) {
                    isColorOpen = false;
                    checkColor();
                    $('.j-color').removeClass('opened');
                    $('.j-md').hide()
                }

                if(isDesignerOpen) {
                    isDesignerOpen = false;
                    checkDesigner();
                    $('.j-designer').removeClass('opened');
                    $('.j-md').hide()
                }
            });

        });
    </script>
@endsection