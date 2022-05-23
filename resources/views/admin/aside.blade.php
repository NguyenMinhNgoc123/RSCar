<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('/AdminLTE-master/dist/img/user2-160x160.jpg')}}"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <?php $name = Session()->get('name');
                if ($name){ ?>
                <a href="#" class="d-block"><?php echo $name ?></a>
                <?php
                }
                ?>

            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
            @if(session()->get('status_admin') == '1')
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="{{route('admin.dashboard')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right "></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.product.list') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Danh mục sản phẩm
                                {{--                                <span class="right badge badge-danger">New</span>--}}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.product.add') }}" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Thêm sản phẩm mới
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Bảng thương hiệu
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.brandProduct.list')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.brandProduct.add')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Loại
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.typeVehicle.list')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.typeVehicle.add')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">XỬ LÝ HIỂN THỊ TRANG CHỦ</li>
                    <li class="nav-item">
                        <a href="{{route('admin.manage-show.list')}}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                DANH SÁCH
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-header">DANH MỤC ĐƠN HÀNG</li>
                <li class="nav-item">
                    <a href="{{route('admin.order.list')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            ĐANG CHỜ
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                @if(session()->get('status_admin') == '1')
                    <li class="nav-item">
                        <a href="{{route('admin.order.list-completed')}}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                ĐÃ HOÀN TẤT
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-header">TÀI KHOẢN</li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            ADMIN
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.list-admin')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        @if(session()->get('status_admin') == '1')
                            <li class="nav-item">
                                <a href="{{route('admin.add-admin')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm mới</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
                @if(session()->get('status_admin') == '1')
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                KHÁCH HÀNG
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.manage-user.list')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li class="nav-header">QUẢN LÝ ĐÁNH GIÁ SẢN PHẨM</li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Danh sách
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
@stack('aside')
