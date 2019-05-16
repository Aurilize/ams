<!DOCTYPE html>
<html lang="en">

<?php include_once 'menu/header.php'; ?>
<style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 20%;
    }
  </style>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<?php include_once 'menu/preloader.php'; ?>
<!-- Main wrapper  -->
<div id="main-wrapper">
    <?php include_once 'menu/topmenu.php'; ?>
    <!-- End header header -->
    <!-- Left Sidebar  -->
    <?php include_once 'menu/sidemenu.php'; ?>
    <!-- End Left Sidebar  -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Audit Universe</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Audit Universe</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                <h4 class="card-title">Audit Plan 2018</h4>
                                    
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Month</th>
                                                <th>Site</th>
                                                <th>Auditor</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>January</td>
                                                <td>HO</td>
                                                <td>1. Budi Supratman <br> 2. Galuh P <br> 3. Agustina A Y S</td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>January</td>
                                                <td>BIN</td>
                                                <td>1. Marwalton Kemit <br> 2. Adam Razadin I <br> 3. Agustina A Y S</td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>February</td>
                                                <td>KDC</td>
                                                <td>1. Agustina A Y S <br> 2. Aprilia N A </td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Maret</td>
                                                <td>KDC</td>
                                                <td>1. Marwalton Kemit <br> 2. Agnes D S <br> 3. Elfana Y P </td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Detail Universe -->

    <!-- Modal Remove Button-->

    <?php include_once 'menu/footer.php'; ?>


</body>

</html>