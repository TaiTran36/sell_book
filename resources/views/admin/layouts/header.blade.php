<header class="admin_header">
    <div class="logo">
        <a href="">ADMIN</a>
    </div>
    <div class="admin_nav">
        <nav class="navbar navbar-static-top">
            <div class="a">
                <span class="glyphicon glyphicon-align-justify"></span>
            </div>

            <div class="b">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-envelope" style=""></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-flag"></span></a></li>
                    <li>
                        <div class="admin col-sm-12">
                            <div class="avatar_header col-sm-2">
                                <img src="D:\Wamp\www\Blog_theme\frontend\1.jpg" class="img-responsive" >

                            </div>
                            <div class="dropdown name col-sm-8">
                                <div class="dropdown-toggle"  data-toggle="dropdown">{{ Auth::user()->name}}
                                    <span class="caret"></span></div>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

</header>
