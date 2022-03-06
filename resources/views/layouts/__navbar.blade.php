<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid b-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="service.html">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="pricing.html">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smoth-scroll" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
