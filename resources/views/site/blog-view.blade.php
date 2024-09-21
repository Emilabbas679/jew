@extends('site.home')
@section('title', __('site.blogview_title'))
@section('content')
<!-- Blog view start -->
<section class="blog-view">
    <div class="centered">
        <div class="blog-view-wrap">
            <div class="blog-content">
                <h2 class="abt-title">About us</h2>
                <div class="abt-text">
                    <p class="p-type-a">Lorem ipsum dolor sit amet consectetur. Amet ut at et ac arcu suspendisse mattis. Varius et gravida nibh blandit fames. Ultricies quis molestie arcu sit duis porttitor elit quisque. Faucibus tincidunt arcu consectetur massa nullam quam orci gravida. Eget lectus varius dictum massa suscipit. Nisl odio ante eu amet ac arcu gravida. Malesuada quis vitae dictum faucibus nunc nunc lacinia tellus. Et diam proin in posuere massa vitae orci ut. Enim vitae nunc ac viverra.</p>
                    <div class="abt-image"><img src="{{asset('/images/p/about.jpg')}}"></div>
                    <p>Varius netus ullamcorper curabitur nullam odio nisi tempor in morbi. Amet pulvinar nisl rhoncus faucibus eget at. Sit at volutpat sit auctor et enim pulvinar sed. Quam aliquam diam at in nibh faucibus risus. Varius integer sociis dui tincidunt id arcu vel. Amet magna iaculis condimentum porttitor diam. Vitae libero parturient interdum neque sagittis. Sodales at ultrices tortor ultrices viverra ipsum sit phasellus. Interdum in mauris vitae maecenas tellus eu quam. Egestas sed orci neque volutpat vel. Libero mauris velit consectetur fusce eget. Duis vitae venenatis mattis neque mattis at mollis integer arcu. Ultrices fermentum pellentesque in at donec. Nec nisl ullamcorper id euismod magna ante risus metus feugiat. Sem sollicitudin pulvinar purus posuere.</p>
                    <p>In aliquam duis orci mattis. Sit etiam felis nisl sed nam. Facilisi posuere nisl fermentum cursus dictum tortor tempus. Et congue fringilla suspendisse magna nec porttitor. Amet quis odio ridiculus ut mollis volutpat vel. Convallis mattis dui fringilla in. Sit nibh et habitasse ultrices ipsum.</p>
                    <p>Cras ipsum velit tincidunt urna et facilisi. Amet nulla mauris ullamcorper in posuere sagittis adipiscing tellus. At duis sed nisl eros commodo sapien vitae scelerisque. Vitae dignissim dignissim convallis at. Etiam sit neque imperdiet est ultrices et eget. Mauris diam dolor mattis turpis. Consectetur tellus amet ut mus nibh vulputate. Et vestibulum dictum ultrices egestas. Lorem diam mattis magnis neque. Vestibulum cras pellentesque id euismod nulla. Mattis cursus id tincidunt justo feugiat. Pretium justo non blandit enim egestas sed venenatis morbi. Purus dui lorem adipiscing mauris. Egestas proin feugiat tincidunt pretium. Augue dolor suspendisse massa tincidunt ipsum placerat orci. Tincidunt nam eu felis aliquet ultricies tincidunt malesuada justo vitae. Nibh blandit ut pellentesque phasellus viverra nec quisque congue est.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog view end -->

@endsection

@section('css')

@endsection

@section('js')
<script>
    $(document).ready(function() {

    });
</script>
@endsection