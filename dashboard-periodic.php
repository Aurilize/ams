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
                <h3 class="text-primary">Audit Dashboard (Periodic)</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Audit Dashboard (Periodic)</a></li>
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
                                <h4 class="card-title">Audit Dashboard (Periodic)</h4>                          
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Site</th>
                                                <th>Project</th>
                                                <th>Auditor</th>
                                                <th>Score</th>
                                                <th>PARFU Progress</th>
                                                <th>PARFU Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 2069011 -->
                                            <tr>
                                                <td>1</td>
                                                <td>2018</td>
                                                <td>LATI</td>
                                                <td>AFCA</td>
                                                <td>1. Marwalton Kemit <br> 2. Budi Supratman <br> 3. Agnes Dyna S </td>
                                                <td><span class="label label-rouded label-warning">1.5</span></td>
                                                <td>100%</td>
                                                <td><span class="label label-rouded label-success">Complete</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2018</td>
                                                <td>KDC</td>
                                                <td>AFCA</td>
                                                <td>1. Marwalton Kemit <br> 2. Adam Razadin I<br> 3. Elfana Yolanda P </td>
                                                <td><span class="label label-rouded label-warning">1.3</span></td>
                                                <td>70%</td>
                                                <td><span class="label label-rouded label-warning">On Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2018</td>
                                                <td>BIN</td>
                                                <td>Daily Working Schedule</td>
                                                <td>1. Agustina A Y S <br> 2. Adam Razadin I <br> 3. Aprilia Nur A </td>
                                                <td><span class="label label-rouded label-success">1.2</span></td>
                                                <td>100%</td>
                                                <td><span class="label label-rouded label-success">Complete</span></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2018</td>
                                                <td>LATI</td>
                                                <td>Inventory Management</td>
                                                <td>1. Agustina A Y S <br> 2. Galuh Pandu Siwi <br> 3. Elfana Y P </td>
                                                <td><span class="label label-rouded label-warning">2</span></td>
                                                <td>100%</td>
                                                <td><span class="label label-rouded label-success">Complete</span></td>
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