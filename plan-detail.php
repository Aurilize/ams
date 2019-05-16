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
                                <h4 class="card-title">Audit Plan</h4>
                                    <a href="add-audit-plan"><button type="submit" class="btn btn-info">Add Audit Plan</button></a>
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Site</th>
                                                <th>Function</th>
                                                <th>Activity</th>
                                                <th>Sub Activity</th>
                                                <th>Total Score</th>
                                                <th>Priority</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>HO</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Planning</td>
                                                <td>49.65</td>
                                                <td><span class="label label-rouded label-red">Extreme</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>HO</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Monitoring</td>
                                                <td>30.15</td>
                                                <td><span class="label label-rouded label-danger">High</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>LAT</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Planning</td>
                                                <td>49.88</td>
                                                <td><span class="label label-rouded label-red">Extreme</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>LAT</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Monitoring</td>
                                                <td>30.35</td>
                                                <td><span class="label label-rouded label-danger">High</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>LAT</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Execution</td>
                                                <td>40.65</td>
                                                <td><span class="label label-rouded label-red">Extreme</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>KDC</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Monitoring</td>
                                                <td>29.15</td>
                                                <td><span class="label label-rouded label-warning">Medium</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>KDC</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Planning</td>
                                                <td>30.65</td>
                                                <td><span class="label label-rouded label-danger">High</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>KDC</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Execution</td>
                                                <td>10.9</td>
                                                <td><span class="label label-rouded label-success">Low</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>ADR</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Planning</td>
                                                <td>11</td>
                                                <td><span class="label label-rouded label-success">Low</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>ADR</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Monitoring</td>
                                                <td>30</td>
                                                <td><span class="label label-rouded label-danger">High</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>ADR</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Planning</td>
                                                <td>49.65</td>
                                                <td><span class="label label-rouded label-red">Extreme</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>BIN</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Planning</td>
                                                <td>25</td>
                                                <td><span class="label label-rouded label-success">Low</span></td>
                                                <td>
                                                    <a href="plan-view"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a>
                                                    <a href="plan-edit"><button type="submit" class="btn btn-success btn-xs">Edit</button></a>
                                                </td>
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