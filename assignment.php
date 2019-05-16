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
                <h3 class="text-primary">Audit Assignment</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Audit Assignment</a></li>
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
                                <h4 class="card-title">Audit Assignment</h4> 
                                <a href="add-kpi-divisi"><button type="submit" class="btn btn-info">Add Assignment</button></a>                                 
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Month</th>
                                                <th>Site</th>
                                                <th>Auditor</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 2069011 -->
                                            <tr>
                                                <td>1</td>
                                                <td><a href="assignment-detail"><u>2018</u></a></td>
                                                <td>January</td>
                                                <td>HO</td>
                                                <td>1. Marwalton Kemit <br> 2. Elfana Yolanda P <br> 3. Agnes Dyna S </td>
                                                <td><span class="label label-rouded label-success">Complete</span></td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><a href="assignment-detail"><u>2018</u></a></td>
                                                <td>February</td>
                                                <td>HO</td>
                                                <td>1. Agustina A Y S <br> 2. Adam Razadin I <br> 3. Elfana Y P </td>
                                                <td><span class="label label-rouded label-danger">Pending</span></td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><a href="assignment-detail"><u>2018</u></a></td>
                                                <td>February</td>
                                                <td>BIN</td>
                                                <td>1. Marwalton Kemit <br> 2. Aprilia N A <br> 3. Galuh P S </td>
                                                <td><span class="label label-rouded label-danger">Pending</span></td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><a href="assignment-detail"><u>2018</u></a></td>
                                                <td>March</td>
                                                <td>LAT</td>
                                                <td>1. Budi S <br> 2. Elfana Yolanda P <br> 3. Agnes Dyna S </td>
                                                <td><span class="label label-rouded label-warning">Not Started</span></td>
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