@extends('site.home')
{{--@section('title', $product->title)--}}
@section('content')
<!-- Product review start -->
<div class="review-page">
    <div class="review">
        <div class="centered">
            <div class="bc-product"><a href="./">Back to product</a></div>
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
            </div>
        </div>
    </div>
</div>
<!-- Product review end -->
@endsection

@section('css')
   <link media="screen" href="{{asset('/css/fancybox.css')}}" type="text/css" rel="stylesheet" />
   <link media="screen" href="{{asset('/css/flatpickr.min.css')}}" type="text/css" rel="stylesheet" />
@endsection

@section('js')
<script type="text/javascript" src="{{asset('/js/fancybox.umd.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/flatpickr.js')}}"></script>
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

$('.m-md').on('click', function(e) {
    e.stopPropagation();
    $(($(this).attr("data-target"))).show();
    $('body').addClass('vd-open')
});

$('.ps-close').on('click', function() {
    $('body').removeClass('vd-open')
    $(this).parents('.m-modal').hide()
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

Fancybox.bind('[data-fancybox="gallery-vd"]', {});


});

let $startDate = $('#startDate');
let $endDate = $('#endDate');

$("#flatpickr").flatpickr({
    mode: "range",
    showMonths: 1,
    dateFormat: "d.m.Y",
    enableTime: false,

    inline:true,
    monthSelectorType: 'static',
    minDate: "today",
    disable: ["27.09.2024", "28.09.2024" ],

    onDayCreate: function(dObj, dStr, fp, dayElem) {
        const today = new Date();

        if (dayElem.dateObj) {
        if (dayElem.dateObj.setHours(0,0,0,0) < today.setHours(0,0,0,0)) {
            dayElem.classList.add("past-date");
        }
        }
    },

    onChange: function(selectedDates) {
        if (selectedDates.length === 2) {
            $startDate.val(flatpickr.formatDate(selectedDates[0], "d.m.Y"));
            $endDate.val(flatpickr.formatDate(selectedDates[1], "d.m.Y"));
        }
    }

});



</script>
@endsection
