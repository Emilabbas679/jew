@extends('site.home')
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
                        <select class="j-select j-cat" name="category">
                            <option></option>
                            <option selected="selected">Rings</option>
                            <option>Bracelets</option>
                            <option>Earrings</option>
                            <option>Necklaces</option>
                        </select>
                    </div>
                </div>
                <div class="j-filter-item">
                    <div class="j-select-a">
                        <select class="j-select j-sub" name="subtype">
                            <option></option>
                            <option>Rings</option>
                            <option>Bracelets</option>
                            <option>Earrings</option>
                            <option>Necklaces</option>
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
                        <select class="j-select j-material" name="subtype">
                            <option></option>
                            <option>Rings</option>
                            <option>Bracelets</option>
                            <option>Earrings</option>
                            <option>Necklaces</option>
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
                                    <li>
                                        <input id="white" type="checkbox" name="color" value="white">
                                        <label for="white">
                                            <i style="background-color:#fff; border-color: #D5DCEB"></i><span>White</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="yellow" type="checkbox" name="color" value="yellow">
                                        <label for="yellow">
                                            <i style="background-color:#EDE468; border-color: #EDE468;"></i><span>Yellow</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="black" type="checkbox" name="color" value="black">
                                        <label for="black">
                                            <i style="background-color:#31373D; border-color: #31373D"></i><span>Black</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="orange" type="checkbox" name="color" value="orange">
                                        <label for="orange">
                                            <i style="background-color:#E0B15A; border-color: #E0B15A"></i><span>Orange</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="blue" type="checkbox" name="color" value="blue">
                                        <label for="blue">
                                            <i style="background-color:#5E70CC; border-color: #5E70CC"></i><span>Blue</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="purple" type="checkbox" name="color" value="purple">
                                        <label for="purple">
                                            <i style="background-color:#B863B7; border-color: #B863B7"></i><span>Purple</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="green" type="checkbox" name="color" value="green">
                                        <label for="green">
                                            <i style="background-color:#65A867; border-color: #65A867"></i><span>Green</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="multicolor" type="checkbox" name="color" value="multicolor">
                                        <label for="multicolor">
                                            <i style="background:linear-gradient(180deg, #E372A6 0%, #E8B761 21%, #F2E579 39.5%, #B3DB7B 61.5%, #8FA3CC 81%, #716B99 100%);"></i><span>Multicolor</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="red" type="checkbox" name="color" value="red">
                                        <label for="red">
                                            <i style="background-color:#D65F5E; border-color: #D65F5E"></i><span>Red</span>
                                        </label>
                                    </li>  
                                    <li>
                                        <input id="gold" type="checkbox" name="color" value="gold">
                                        <label for="gold">
                                            <i style="background:linear-gradient(180deg, #FED376 0%, #FFFDE3 50%, #FED376 100%);"></i><span>Gold</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="pink" type="checkbox" name="color" value="pink">
                                        <label for="pink">
                                            <i style="background-color:#F0A8D5; border-color: #F0A8D5"></i><span>Pink</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input id="silver" type="checkbox" name="color">
                                        <label for="silver" value="silver">
                                            <i style="background: linear-gradient(180deg, #C0C0C0 0%, #F5F5F5 49.5%, #C0C0C0 100%)"></i><span>Silver</span>
                                        </label>
                                    </li>
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
                                    <li>
                                        <input id="d1" type="checkbox" name="color" value="d1">
                                        <label for="d1">Adina Reyter</label>
                                    </li>
                                    <li>
                                        <input id="d2" type="checkbox" name="color" value="d2">
                                        <label for="d2">Agmes</label>
                                    </li>
                                    <li>
                                        <input id="d3" type="checkbox" name="color" value="d3">
                                        <label for="d3">Alighieri</label>
                                    </li>
                                    <li>
                                        <input id="d4" type="checkbox" name="color" value="d4">
                                        <label for="d4">Aliita</label>
                                    </li>
                                    <li>
                                        <input id="d5" type="checkbox" name="color" value="d5">
                                        <label for="d5">Balenciaga</label>
                                    </li>
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
            <div class="no-product">
                <div class="np-i"></div>
                <div class="np-text">Product not found</div>
                <div class="np-desc">Lorem ipsum dolor sit amet consectetur. Diam sit morbi pharetra nullam eget.</div>
            </div>
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