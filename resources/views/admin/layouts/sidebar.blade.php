<aside class="menu_admin">
    <section class="sidebar">
        <div class="user_panel">
            <div class="user_infor">
                <div class="row" style="margin:0">
                    <div class="col-sm-4">
                        <div class="avatar_header">
                            <img src="D:\Wamp\www\Blog_theme\frontend\1.jpg" class="img-responsive" >

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <p>{{ Auth::user()->name}}</p>
                        <p><i class="fa fa-circle text-success"></i>Online</p>
                    </div>
                </div>
            </div>

            <div class="sreach">
                <input class="well well-sm" type="text" name="sreach" placeholder="Search" style="">
            </div>
        </div>
        <div class="sidebar-list">
            <ul>
                <li class="main " style="background-color: #1a2226">MAIN NAVIGATION</li>
                <li class=" ">
                    <a href="{{ url('admin/dashboard') }}">
                        <span class="pull-left-container">
                            <span class="glyphicon glyphicon-dashboard"></span>
                        </span>
                        <span>Dashboard</span>
                    </a>

                </li>
                <li>
                    <a href="{{ url('admin/permission') }}">
                        <span class="pull-left-container">
                            <span class="glyphicon glyphicon-text-background"></span>
                        </span>
                        <span>Permission</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('admin/about') }}">
                        <span class="pull-left-container">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                        <span>About</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('admin/contact') }}">
                        <span class="pull-left-container">
                            <span class="glyphicon glyphicon-earphone"></span>
                        </span>
                        <span>Contact</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('admin/blog') }}">
                        <span class="pull-left-container">
                            <span class="glyphicon glyphicon-edit"></span>
                        </span>
                        <span>Blog</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('admin/skill') }}">
                        <span class="pull-left-container">
                            <span class="glyphicon glyphicon-tasks"></span>
                        </span>
                        <span>Skill</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ url('admin/cv') }}">
                        <span class="pull-left-container">
                            <span class="glyphicon glyphicon-list-alt"></span>
                        </span>
                        <span>CV</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</aside>
