<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Willy IOS</title>

        <!-- Custom fonts for this template -->
        <link
            href="vendor/fontawesome-free/css/all.min.css"
            rel="stylesheet"
            type="text/css">
        <link
            href="<?php echo base_url('assets/vendor/aos/aos.css');?>"
            rel="stylesheet">
        <link
            href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="docs.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul
                class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
                id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a
                    class="sidebar-brand d-flex align-items-center justify-content-center"
                    href="<?php echo base_url(''); ?>">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fab fa-apple"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">LOKET ANTRIAN
                        <sup></sup>
                    </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(''); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading"></div>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('antrian'); ?>">
                        <i class="fas fa-qrcode"></i>
                        <span>Ambil Antrian</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('antrianno'); ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Nomor Antrian</span></a>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a
                        class="nav-link collapsed"
                        href="#"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class=" fas fa-cog fa-pulse"></i>
                        <span>Admin</span>
                    </a>
                    <div
                        id="collapseTwo"
                        class="collapse"
                        aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Menu:</h6>
                            <a class="collapse-item" href="<?php echo base_url('pelayanan'); ?>">Pelayanan</a>
                            <a class="collapse-item" href="<?php echo base_url('loket'); ?>">Loket</a>
                            <a class="collapse-item" href="<?php echo base_url('loketpanggil'); ?>">Loket Antrian</a>
                        </div>
                    </div>

                </li>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="app">
                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav
                        class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <marquee width="1000" height="40" style="font-size:20px;color:rgba(9,9,121,1);font-style:italic">Aplikasi Loket Antrian Berbasis Web dengan Framework Codeigniter 4 , Copyright &copy; 2021 Designs BY WILIANTO</marquee>
                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button
                                id="sidebarToggleTop"
                                class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>
                    </nav>

                    <div class="container">
                        <h1 class="display-4" style="text-align: center;color:goldenrod">
                            Aplikasi Antrian Berbasis WEB dengan Framework Codeigniter 4
                        </h1>
                        <center><h1 class="fab fa-free-code-camp" style="font-size: 30rem;color:white;"></h1></center>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span style="font-size:20px;color:black">2021 &copy; Designs BY WILIANTO
                </span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>