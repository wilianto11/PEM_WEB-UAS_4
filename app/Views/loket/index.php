<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Willy IOS</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(''); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fab fa-apple"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LOKET ANTRIAN <sup></sup></div>
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
            <div class="sidebar-heading">
                
            </div>
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class=" fas fa-cog fa-pulse"></i>
                    <span>Admin</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <marquee width="1000" height="40" style="font-size:20px;color:rgba(9,9,121,1);font-style:italic">Aplikasi Loket Antrian Berbasis Web dengan Framework Codeigniter 4 , Copyright &copy; 2021 Designs BY WILIANTO</marquee>
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
</form>
                </nav>
 
    <div class="container mt-5 mb-5 text-center">
        <h4>Loket Antrian menggunakan Framework Codeigniter 4</h4>
        <h1 class="fab fa-free-code-camp"></h1>
    </div>
    <div class="container">
        <?php
        if(!empty(session()->getFlashdata('success'))){ ?>
 
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success');?>
        </div>
             
        <?php } ?>
        <?php if(!empty(session()->getFlashdata('info'))){ ?>
 
        <div class="alert alert-info">
            <?php echo session()->getFlashdata('info');?>
        </div>
             
        <?php } ?>
 
        <?php if(!empty(session()->getFlashdata('warning'))){ ?>
 
        <div class="alert alert-warning">
            <?php echo session()->getFlashdata('warning');?>
        </div>
             
        <?php } ?>
    </div>
    <div class="container-fluid">
    <a href="<?php echo base_url('loket/create'); ?>" class="btn btn-success float-right mb-3">Tambah Loket</a>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Admin Loket</h1>
<p class="mb-4">Data Loket<a target="_blank" ></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Loket</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Keterangan</th>
                    <th>Layanan</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php 
                    foreach($loket as $key => $data) { ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $data['nama_loket']; ?></td>
                        <td><?php echo $data['keterangan_loket']; ?></td>
                        <td><?php echo $data['id_loket_pelayanan']; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('loket/edit/'.$data['id_loket']); ?>" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                <a href="<?php echo base_url('loket/delete/'.$data['id_loket']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Loket<?php echo $data['nama_loket']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
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
                    <span style="font-size:20px;color:black">2021 &copy; Designs BY WILIANTO </span>
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