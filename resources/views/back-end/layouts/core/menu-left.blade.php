<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">UI elements</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Author</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('author.index')}}">Author List</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{route('author.create')}}">Add Author</a></li>

                        </ul>
                </li>
{{--                <li class="menu-item-has-children dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                       aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Management Library</a>--}}
{{--                    <ul class="sub-menu children dropdown-menu">--}}
{{--                        <li><i class="fa fa-table"></i><a href="{{route('library.index')}}">List Library</a></li>--}}
{{--                        <li><i class="fa fa-table"></i><a href="{{route('library.create')}}">Add Library</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="menu-item-has-children dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                       aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Book</a>--}}
{{--                    <ul class="sub-menu children dropdown-menu">--}}
{{--                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('book.index')}}"> List Book</a></li>--}}
{{--                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('book.create')}}">Add Book</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <li class="menu-title">Icons</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a>
                        </li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-title">Extras</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Logout</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="">Logout</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>