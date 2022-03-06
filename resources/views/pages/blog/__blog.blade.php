<section class="section blog-wrap ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-post">
                            <img src="{{asset('images/blog/blog-lg.jpg')}}" alt="" class="img-fluid">
                            <div class="mt-4 mb-3 d-flex">
                                <div class="post-author mr-3">
                                    <i class="fa fa-user"></i>
                                    <span class="h6 text-uppercase">John mackel</span>
                                </div>

                                <div class="post-info">
                                    <i class="fa fa-calendar-check"></i>
                                    <span>19 jun 18</span>
                                </div>
                            </div>
                            <a href="{{route('blog.single','le-prod')}}" class="h4 ">Falling in lin in google
                                strategy</a>
                            <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, tenetur
                                debitis iste eos doloremque praesentium nulla numquam nostrum quas distinctio sapiente
                                illum nam laudantium laboriosam nobis odit nesciunt error? Dolor.</p>
                            <a href="{{route('blog.single','le-prod')}}" class="read-more">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <img src="{{$post->photo}}" alt="" class="img-fluid">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">John mackel</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>{{$post->create_at_formated}}</span>
                                    </div>
                                </div>
                                <a href="{{$post->url}}" class="h4 ">
                                  {{$post->title}}
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
