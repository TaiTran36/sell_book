<header class="navbar">
    <div class="product col-sm-12">
        <div class="name_product col-sm-10 text-center">
            <h3>TTT</h3>
        </div>
    </div>
    <div class="mobie-menu-sideBar col-sm-2" >
        <span class="glyphicon glyphicon-align-justify right"></span>
    </div>
    <div class="user-info-manager col-sm-2">

        <div class="u-1 user-info">
            <span class="glyphicon glyphicon-user"></span>
            <div  class="dropdown-menu-user " id="dropdown-menu-user">
                <div class="option-user-info">
                    <div class="items-1 user-info-items">
                        <div class="avatar-user">

                        </div>
                        <div class="name-user">{{ Auth::user()->name}}</div>
                    </div>
                    <div class="items-2 user-info-items">
                        <div class="o-1"><a href="">Logout</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="u-1">
            <span class="glyphicon glyphicon-bell"></span>
        </div>
    </div>
</header>
{{--<a href="{{route('logout')}}" onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--    {{ __('Logout') }}--}}
{{--</a>--}}
{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--    @csrf--}}
{{--</form>--}}
