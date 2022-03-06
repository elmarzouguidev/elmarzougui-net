<section class="section blog-wrap ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($categories as $post)
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <img src="{{$post->photo}}" alt="" class="img-fluid">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>{{$post->create_at_formated}}</span>
                                    </div>
                                </div>
                                <a href="{{$post->url}}" class="h3 ">
                                  {{$post->name}}
                                </a>
                                <p class="mt-3">
                                    {{$post->short_description}}
                                </p>
                                <a href="{{$post->url}}" class="read-more">
                                    Read More <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            @include('pages.blog.__sidebar')

        </div>
    </div>

</section>
