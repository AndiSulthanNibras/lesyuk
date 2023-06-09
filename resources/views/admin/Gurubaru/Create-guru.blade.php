<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('admin.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tambah Guru</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>Tambah Data Guru</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('simpan-guru')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Guru">
                            </div>
                            <div class="form-group">
                                <input type="text" id="matapelajaran" name="matapelajaran" class="form-control" placeholder="Mata Pelajaran">
                            </div>
                            <div class="form-group">
                                <input type="text" id="biaya" name="biaya" class="form-control" placeholder="Harga Pertemuan">
                            </div>
                            <div class="form-group">
                                <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Guru"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" id="kelasajar" name="kelasajar" class="form-control" placeholder="Mengajar Kelas">
                            </div>
                            <div class="form-group">
                                <input type="date" id="tgllhr" name="tgllhr" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('admin.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('Dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('Dashboard/dist/js/adminlte.min.js')}}"></script>
</body>

</html>