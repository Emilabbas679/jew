<!DOCTYPE html>
<html>

@include('site.parts.head')
<body>
<div class="x-site">
@include('site.parts.header')
<div class="container">
@yield('content')
</div>
@include('site.parts.footer')
<div id="fav-message"></div>
</div>

@yield('js')

<script type="text/javascript" src="{{asset('/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/xate.js?v='.time())}}"></script>

<script>
$(document).ready(function() {
    let favTimeout;

    $(".product-fav").click(function () {
        let productId = $(this).attr('data-product-id');
        let action;
        if ($(this).hasClass('active')) {
            action = 'create';
        } else {
            action = 'delete';
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ secure_url('favorite-product') }}",
            method: "POST",
            data: {
                action: action,
                product_id: productId
            },
            success: function(response) {
                if(response.status == 'success') {
                    if ($('#fav-message').hasClass('show')) {
                       clearTimeout(favTimeout);
                       $('#fav-message').text('').removeClass('show');
                    }

                    action == 'create' ? 
                        $('#fav-message').text('Product added to favorites').addClass('show') : 
                        $('#fav-message').text('Product deleted from favorites').addClass('show')

                    favTimeout = setTimeout(function() {
                        $('#fav-message').removeClass('show');
                    }, 3000);
                }
                else{
                    if ($('#fav-message').hasClass('show')) {
                       clearTimeout(favTimeout);
                       $('#fav-message').text('').removeClass('show');
                    }

                    $('.product-fav').removeClass('active')
                     $('#fav-message').text('Please login to the website').addClass('show')

                    favTimeout = setTimeout(function() {
                        $('#fav-message').removeClass('show');
                    }, 3000);
                }
            }
        });


    })
});
</script>
</body>


