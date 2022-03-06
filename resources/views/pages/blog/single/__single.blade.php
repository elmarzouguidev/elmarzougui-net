<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
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

                            <a href="{{$post->url}}" class="h4 ">{{$post->title}}</a>

                            <p class="mt-3">
                                {!! $post->body !!}
                            </p>

                            <div class="mt-5 mb-3">
                                <h5 class="d-inline-block mr-3">Tags:</h5>
                                <ul class="list-inline d-inline-block">
                                    <li class="list-inline-item"><a href="#">Agency</a>,</li>
                                    <li class="list-inline-item"><a href="#">Marketing</a>,</li>
                                    <li class="list-inline-item"><a href="#">Business</a></li>
                                </ul>
                            </div>
                            <div class="my-4">
                                <h5 class="d-inline-block mr-3">Share Now:</h5>
                                <ul class="list-inline d-inline-block">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="comments my-4">
                            <h3 class="mb-5">Comments :</h3>

                            <div class="media mb-4">
                                <img src="{{asset('images/blog/2.jpg')}}" alt="" class="img-fluid d-flex mr-4 rounded">
                                <div class="media-body">
                                    <h5>John michele</h5>
                                    <span class="text-muted">20 Jan 2018</span>
                                    <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi laborum dolores quidem ea optio fuga nesciunt tempora, in tenetur iusto!</p>

                                    <a href="#" class="reply">Reply <i class="fa fa-reply"></i></a>

                                    <div class="media mt-5">
                                        <img src="{{asset('images/blog/2.jpg')}}" alt="" class="img-fluid d-flex mr-4 rounded">
                                        <div class="media-body">
                                            <h5>John michele</h5>
                                            <span class="text-muted">20 Jan 2018</span>
                                            <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi laborum dolores quidem ea optio fuga nesciunt tempora, in tenetur iusto!</p>

                                            <a href="#" class="reply">Reply <i class="fa fa-reply"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img src="{{asset('images/blog/2.jpg')}}" alt="" class="img-fluid d-flex mr-4 rounded">
                                <div class="media-body">
                                    <h5>John michele</h5>
                                    <span class="text-muted">20 Jan 2018</span>
                                    <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi laborum dolores quidem ea optio fuga nesciunt tempora, in tenetur iusto!</p>

                                    <a href="#" class="reply">Reply <i class="fa fa-reply"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 mb-3">
                            <h3 class="mt-5 mb-2">Leave a comment</h3>
                            <p class="mb-4">We don't spam at your inbox.</p>
                            <form action="#" class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <textarea cols="30" rows="6" class="form-control"  placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <a href="#" class="btn btn-hero btn-circled">Send a message</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @include('pages.blog.single.__sidebar')

        </div>
    </div>

</section>
