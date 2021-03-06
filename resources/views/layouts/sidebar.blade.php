<ul class="nav navbar-nav">
    <li class="active">
        <a href="{{ route('home') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
    </li>
    <li class="menu-title">Data Management</li>
    <li>
        <a href="{{ route('users.index') }}">
            <i class="menu-icon fas fa-users"></i> Users 
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
    <li>
        <a href="{{ route('discounts.index') }}">
        <i class="menu-icon fas fa-tags"></i> Coupons 
        </a>
    </li>
    <li>
        <a href="{{ route('banners.index') }}">
        <i class="menu-icon fas fa-images"></i> Banners
        </a>
    </li>
    <li class="menu-title">Customers Management</li>
    <li>
        <a href="{{ route('orders.index') }}">
        <i class="menu-icon fas fa-chart-bar"></i> Orders  
        </a>
    </li>
    <li>
        <a href="{{ route('customers.index') }}">
        <i class="menu-icon fas fa-users"></i> Customers  
        </a>
    </li>
</ul>