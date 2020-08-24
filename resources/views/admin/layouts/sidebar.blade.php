<nav class="navbar-wrapper side-bar" id="side-bar">
    <div class="scroll">
        <div class="side-bar-header">
            <div class="avatar-user">

            </div>
            <div class="name-user nu-show" id="name-user">{{ Auth::user()->name}}</div>
        </div>
        <div class="side-bar-list">
            <ul>
                <li>
                    <a class="l-1 dashboard {{(request()->segment(2) == 'dashboard')?'active':'' }} " href="{{ url('admin/dashboard') }}">
                        <i class="l-icon fas fa-home"></i>
                        <span class="l-name">Dashboard</span>
                        <span class="l-icon glyphicon glyphicon-chevron-right"></span>
                    </a>
                </li>
                <li>
                    <a class="l-1 theme {{(request()->segment(2) == 'permission')?'active':'' }}"  href="{{ url('admin/permission') }}">
                        <i class="l-icon fas fa-home"></i>
                        <span class="l-name">Dashboard</span>
                        <span class="l-icon glyphicon glyphicon-chevron-right"></span>
                    </a>
                </li>
                <li>
                    <a class="l-1 datas" href="{{ url('admin/about') }}">
                        <i class="l-icon fas fa-home"></i>
                        <span class="l-name">Dashboard</span>
                        <span class="l-icon glyphicon glyphicon-chevron-right"></span>
                    </a>
                </li>
                <li>
                    <a class="l-1 user" href="{{ url('admin/contact') }}">
                        <i class="l-icon fas fa-home"></i>
                        <span class="l-name">Dashboard</span>
                        <span class="l-icon glyphicon glyphicon-chevron-right"></span>
                    </a>
                </li>
                <li>
                    <a class="l-1 e-commerce {{(request()->segment(2) == 'e-commerce')?'active':'' }}" href="javascript:void(0)">
                        <i class="l-icon fas fa-home"></i>
                        <span class="l-name">E-commerce</span>
                        <span class="l-icon glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <ul class="l-1-children" style="display: {{(request()->segment(2) == 'e-commerce')?'block':'' }}" data-widget="treeview">
                        <li>
                            <a class="l-1 {{(request()->segment(3) == 'categories')?'active':'' }}" href="{{ url('admin/e-commerce/categories') }}" >
                                <span class="l-name">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a class="l-1 {{(request()->segment(3) == 'subcategories')?'active':'' }}" href="" >
                                <span class="l-name">Subcategories</span>
                            </a>
                        </li>
                        <li>
                            <a class="l-1 {{(request()->segment(3) == 'book')?'active':'' }}" href="{{ url('admin/e-commerce/books') }}" >
                                <span class="l-name">Book</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="l-1 message">
                        <i class="l-icon fas fa-home"></i>
                        <span class="l-name">Dashboard</span>
                        <span class="l-icon glyphicon glyphicon-chevron-right"></span>
                    </a>
                </li>
                <li>
                    <a class="l-1 pages">
                        <i class="l-icon fas fa-home"></i>
                        <span class="l-name">Dashboard</span>
                        <span class="l-icon glyphicon glyphicon-chevron-right"></span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
