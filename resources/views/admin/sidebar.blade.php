<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link ">
                <img src="{{asset('Image/LesyukIcon.png')}}" alt="AdminLTE Logo" class="b" style="opacity: .8">
                <span class="brand-text font-weight-light"></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('Image/Kaka.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Greska Wiranatha</a>
                    </div>
                </div>

            

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tambah Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href=" {{ route('guru-baru') }}" class="nav-link">
                                        Guru Baru
                                    </a>
                                </li> 
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href=" {{ route('murids') }}" class="nav-link">
                                        Murid
                                    </a>
                                </li> 
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href=" {{ route('reviews') }}" class="nav-link">
                                        Review
                                    </a>
                                </li> 
                            </ul>
                        </li>   
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>