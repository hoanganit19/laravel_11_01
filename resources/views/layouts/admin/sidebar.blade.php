<?php
echo 'ok';
openSubMenu();
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="{{asset('admins/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Unicode</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admins/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.profile')}}" class="d-block">{{Auth::user()->name}}</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Thoát</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.index')}}" class="nav-link {{activeMenu('admin.index')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tổng quan
                        </p>
                    </a>
                </li>

                @can('categories.view')
                <li class="nav-item has-treeview {{openSubMenu('categories')}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Danh mục sản phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.categories.index')}}" class="nav-link {{activeMenu('admin.products.index')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        @can('categories.add')
                        <li class="nav-item">
                            <a href="{{route('admin.categories.add')}}" class="nav-link {{activeMenu('admin.products.add')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('attributes.view')
                <li class="nav-item has-treeview {{openSubMenu('attributes')}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-creative-commons-by"></i>
                        <p>
                            Thuộc tính sản phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.attributes.index')}}" class="nav-link {{activeMenu('admin.attributes.index')}}">
                                <i class="far fa-circle nav-icon"></i>

                                <p>Danh sách</p>
                            </a>
                        </li>
                        @can('attributes.add')
                        <li class="nav-item">
                            <a href="{{route('admin.attributes.add')}}" class="nav-link {{activeMenu('admin.attributes.add')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('products.view')
                <li class="nav-item has-treeview {{openSubMenu('products')}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Sản phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.products.index')}}" class="nav-link {{activeMenu('admin.products.index')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        @can('products.add')
                        <li class="nav-item">
                            <a href="{{route('admin.products.add')}}" class="nav-link {{activeMenu('admin.products.add')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('users.view')
                <li class="nav-item has-treeview {{openSubMenu('users')}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Người dùng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.users.index')}}" class="nav-link {{activeMenu('admin.users.index')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>

                        @can('users.add')
                        <li class="nav-item">
                            <a href="{{route('admin.users.add')}}" class="nav-link {{activeMenu('admin.users.add')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('groups.view')
                <li class="nav-item has-treeview {{openSubMenu('groups')}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Nhóm Người dùng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.groups.index')}}" class="nav-link {{activeMenu('admin.groups.index')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        @can('groups.add')
                        <li class="nav-item">
                            <a href="{{route('admin.groups.add')}}" class="nav-link {{activeMenu('admin.groups.add')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('options.general')
                    @php
                        $checkGeneral = true;
                    @endphp
                @endcan

                @can('options.header')
                    @php
                    $checkHeader = true;
                    @endphp
                @endcan

                @can('options.footer')
                    @php
                    $checkFooter = true;
                    @endphp
                @endcan

                @can('options.home')
                    @php
                    $checkHome = true;
                    @endphp
                @endcan

                @can('options.menu')
                    @php
                    $checkMenu = true;
                    @endphp
                @endcan

                @if (!empty($checkGeneral) || !empty($checkHeader) || !empty($checkFooter) || !empty($checkHome) || !empty($checkMenu))
                <li class="nav-item has-treeview {{openSubMenu('options')}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Thiết lập
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('options.general')
                        <li class="nav-item">
                            <a href="{{route('admin.options.index')}}" class="nav-link {{activeMenu('admin.options.index')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thiết lập chung</p>
                            </a>
                        </li>
                        @endcan

                        @can('options.header')

                        <li class="nav-item">
                            <a href="{{route('admin.options.header')}}" class="nav-link {{activeMenu('admin.options.header')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thiết lập Header</p>
                            </a>
                        </li>
                        @endcan

                        @can('options.footer')
                        <li class="nav-item">
                            <a href="{{route('admin.options.footer')}}" class="nav-link {{activeMenu('admin.options.footer')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thiết lập Footer</p>
                            </a>
                        </li>
                        @endcan

                        @can('options.home')
                        <li class="nav-item">
                            <a href="{{route('admin.options.home')}}" class="nav-link {{activeMenu('admin.options.home')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thiết lập trang chủ</p>
                            </a>
                        </li>
                        @endcan

                        @can('options.menu')
                        <li class="nav-item">
                            <a href="{{route('admin.options.menu')}}" class="nav-link {{activeMenu('admin.options.menu')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thiết lập Menu</p>
                            </a>
                        </li>
                        @endcan


                    </ul>
                </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>