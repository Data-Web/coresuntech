<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input type="text" class="searchinput" />
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Products-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-th"></i>
                <span class="menu-text"> Quản lý sản phẩm </span>
                <i class="menu-expand"></i>
            </a>

            <ul class="submenu">
                <li>
                    <a href="#" class="menu-dropdown">
                        <span class="menu-text">
                            Danh sách sản phẩm
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <span class="menu-text">
                            Thêm mới sản phẩm
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <!--Categories-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-th"></i>
                <span class="menu-text"> Danh mục sản phẩm </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="tables-simple.html">
                        <span class="menu-text">Danh sách danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <span class="menu-text">Thêm mới danh mục</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--News-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-th"></i>
                <span class="menu-text"> Quản lý tin tức </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="tables-simple.html">
                        <span class="menu-text">Danh sách tin tức</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <span class="menu-text">Thêm mới tin tức</span>
                    </a>
                </li>
            </ul>
        </li>

        <!--News-->
        <li>
            <a href="javascript:void(0);" class="menu-dropdown">
                <i class="menu-icon fa fa-th"></i>
                <span class="menu-text"> Danh mục tin tức </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="{{ URL::route('admin.newscategory.index') }}">
                        <span class="menu-text">Danh sách danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <span class="menu-text">Thêm mới danh mục</span>
                    </a>
                </li>
            </ul>
        </li>

        <!--Article-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-th"></i>
                <span class="menu-text"> Quản lý trang</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="tables-simple.html">
                        <span class="menu-text">Danh sách trang</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <span class="menu-text">Thêm trang mới</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--Article-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-th"></i>
                <span class="menu-text"> Quản lý slider </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="tables-simple.html">
                        <span class="menu-text">Danh sách slider</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <span class="menu-text">Loại slider</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--Article-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-th"></i>
                <span class="menu-text"> Quản lý user </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="tables-simple.html">
                        <span class="menu-text">Danh sách user</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <span class="menu-text">Thêm mới user</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--Article-->
        <li>
            <a href="#">
                <i class="menu-icon fa fa-th"></i>
                <span class="menu-text"> Quản lý liên hệ </span>
            </a>
        </li>
    </ul>
    <!-- /Sidebar Menu -->
</div>
