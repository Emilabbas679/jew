@extends('site.home')
@section('title', __('site.blog_title'))
@section('content')
<!-- Blog start -->
<section class="blog-page no-page">
    <div class="centered">
        <div class="blog-page-wrap">
            <div class="bg-title">Latest Blog Posts</div>
            <div class="blog-list">

                @foreach($articles->items() as $item)
                    <div class="blog-item">
                        <a href="{{route('blog_detail', $item->id)}}">
                            <div class="blog-image"><img src="{{asset('/storage/'.$item->image)}}"></div>
                            <div class="blog-info">
                                <div class="blog-date">{{date('d.m.Y',strtotime($item->created_at))}}</div>
                                <h2 class="blog-title">{{$item->title}}</h2>
                            </div>
                        </a>
                    </div>
                @endforeach
                

                {{$articles->links()}}
            </div>
        </div>
    </div>
</section>
<!-- Blog end -->

@endsection

@section('css')

@endsection

@section('js')
<script>
    $(document).ready(function() {


    });
</script>
@endsection
