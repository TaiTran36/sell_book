<nav class="navbar-wrapper side-bar" id="side-bar">
    <div class="scroll">
        <div class="side-bar-header">
            <div class="avatar-user">

            </div>
            <div class="name-user nu-show" id="name-user">{{ Auth::user()->name}}</div>
        </div>
        <div class="side-bar-list">
            <a class="l-1 dashboard {{(request()->segment(2) == 'dashboard')?'active':'' }} " href="{{ url('admin/dashboard') }}">
                <i class="l-icon fas fa-home"></i>
                <span class="l-name">Dashboard</span>
                <span class="l-icon glyphicon glyphicon-chevron-right"></span>
            </a>
            <a class="l-1 theme {{(request()->segment(2) == 'permission')?'active':'' }}"  href="{{ url('admin/permission') }}">
                <i class="l-icon fas fa-home"></i>
                <span class="l-name">Dashboard</span>
                <span class="l-icon glyphicon glyphicon-chevron-right"></span>
            </a>
            <a class="l-1 datas" href="{{ url('admin/about') }}">
                <i class="l-icon fas fa-home"></i>
                <span class="l-name">Dashboard</span>
                <span class="l-icon glyphicon glyphicon-chevron-right"></span>
            </a>
            <a class="l-1 user" href="{{ url('admin/contact') }}">
                <i class="l-icon fas fa-home"></i>
                <span class="l-name">Dashboard</span>
                <span class="l-icon glyphicon glyphicon-chevron-right"></span>
            </a>
            <a class="l-1 e-commerce" href="{{ url('admin/blog') }}">
                <i class="l-icon fas fa-home"></i>
                <span class="l-name">Dashboard</span>
                <span class="l-icon glyphicon glyphicon-chevron-right"></span>
            </a>
            <a class="l-1 message">
                <i class="l-icon fas fa-home"></i>
                <span class="l-name">Dashboard</span>
                <span class="l-icon glyphicon glyphicon-chevron-right"></span>
            </a>
            <a class="l-1 pages">
                <i class="l-icon fas fa-home"></i>
                <span class="l-name">Dashboard</span>
                <span class="l-icon glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</nav>

