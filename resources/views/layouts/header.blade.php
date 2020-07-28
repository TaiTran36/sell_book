<header style="width:auto">
    <div class="container-content-header">
        <div class="menu-bar">
            <div class="block-menu">
                <div class="logo-text">
                    <div class="logo-content">3T - Book</div>
                </div>
                <div class="list-menu-header">
                    <div class="item-header home"><a href="#">HOME</a></div>
                    <div class="item-header store"><a href="#">BOOKSTORE</a></div>
                    <div class="item-header blog"><a href="#">BLOG</a></div>
                    <div class="item-header about-us"><a href="#">ABOUT US</a></div>
                    <div class="item-header contact"><a href="#">CONTACT</a></div>
                </div>
                <div class="card-header-client">
                    <div class="card-item">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="quantity-product"></span>
                    </div>
                    <div class="account">
                        @guest
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="{{ route('dashboard') }}" class="dropdown-item">Quản lí Web</a>
                                </div>

                            </div>

                        @endguest

                    </div>
                </div>
            </div>
        </div>
        <div class="content-header">
            <div class="title-content-header">
                <div class="text-header" >Reading is the best for get idea</div>
                <div style="padding: 4px 0 18px;font-size: 80px;font-weight: normal;line-height: 1">Keep Reading</div>
            </div>
        </div>
    </div>
    <div class="slider" style="height:600px;">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="{{asset('images/slider-01.jpg')}}" style="width:100%" class="img-responsive">
            </div>

            <div class="mySlides fade">
                <img src="{{asset('images/slider-02.jpg')}}" style="width:100%" class="img-responsive">
            </div>

            <div class="mySlides fade">
                <img src="{{asset('images/slider-03.jpg')}}" style="width:100%" class="img-responsive">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>

</header>