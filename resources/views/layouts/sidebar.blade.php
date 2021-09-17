<ul class="nav navbar-nav">
    <li class="active">
        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
    </li>
    <li>
        <a href="{{ route('users.index') }}">
            <i class="menu-icon fas fa-users"></i>Users 
        </a>
    </li>
    <li>
        <a href="{{ route('categories.index') }}">
        <i class="menu-icon fas fa-book"></i></i> Courses 
        </a>
    </li>
    <li>
        <a href="{{ route('news.index') }}">
        <i class="menu-icon fas fa-newspaper"></i> News 
        </a>
    </li>
  
</ul>