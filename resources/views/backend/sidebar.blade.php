<div class="sidebar" data-image="{{ URL::asset('public/assets/backend/assets/img/sidebar-5.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Creative Tim
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('admin') }}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>quay về trang web</p>
                </a>
            </li>
            
            <li>
                <a class="nav-link" href="{{ url('admin/category') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Quản lý danh mục</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('admin/size') }}">
                    <i class="nc-icon nc-atom"></i>
                    <p>Quản lý kích cỡ</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('admin/brand') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Quản lý nhãn hiệu</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('admin/product') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Danh sách sản phẩm</p>
                </a>
            </li>
            <li class="nav-item active active-pro">
                <a class="nav-link active" href="{{ route('admin.order') }}">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>Quản lý đơn hàng</p>
                </a>
            </li>
        </ul>
    </div>
</div>