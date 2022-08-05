@extends('site.include.layout')
@section('content')
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('site/assets/images/share.png')}});">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">{{$title}}</h1>
             </div>
          </div>
       </div>
    </section>
    <!-- Inner Banner html end-->
    <div class="archive-section blog-archive">
       <div class="container">
          <div class="row">
             <div class="col-lg-12 primary right-sidebar">
                <!-- blog post item html start -->
                <div class="grid blog-inner row">

                    @foreach ($initiatives as $index=>$initiative)

                        <div class="grid-item col-md-4">
                            <article class="post">
                                <figure class="feature-image">
                                    <a href="blog-single.html">
                                        <img src="{{asset('Upload/'.$initiative->image)}}" alt="">
                                </a>
                            </figure>
                            <div class="entry-content">
                                <h3>
                                <a href="blog-single.html">{{$initiative->title}}</a>
                                </h3>
                                <p>
                                    <span>
                                        {{$initiative->description}}
                                    </span>
                                </p>

                                <div class="entry-meta">

                                </div>
                            </div>
                        </article>
                    </div>
                   @endforeach

                </div>
             </div>

          </div>
       </div>
    </div>
 </main>
@endsection

@section('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@endsection
