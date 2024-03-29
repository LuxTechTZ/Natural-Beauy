<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item {{ (Request::is('home')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
             <li class="nav-item {{ (Request::is('home/products')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/products" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Products</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ (Request::is('home/orders')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/orders" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Orders</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item {{ (Request::is('home/blog*')) ? 'active open' : null }}">
                <a href="{{url('/')}}/home/blog" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Blog</span>
                    <span class="selected"></span>
                </a>
            </li>

            
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>