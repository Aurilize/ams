<!DOCTYPE html>
<html lang="en">

<style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 20%;
    }
  </style>

<?php include_once 'menu/header.php'; ?>

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
                <h3 class="text-primary">KPI Individu</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">KPI</a></li>
                    <li class="breadcrumb-item active">KPI Individu</li>
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
                                <h4 class="card-title">IPPA</h4>
                                    <a href="add-kpi-individu"><button type="submit" class="btn btn-info">Add IPPA </button></a>
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tahun</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>10020973</td>
                                                <td>Agustina A Y S</td>
                                                <td>2018</td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#viewIPPA">View</button>
                                                    <a href="edit-ippa"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editKPI">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>10020972</td>
                                                <td>Aprilia N A</td>
                                                <td>2018</td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#viewIPPA">View</button>
                                                    <a href="edit-ippa"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editKPI">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">KPI Internal</h4>
                                <!-- <h6 class="card-subtitle">Data table example</h6> -->
                                <a href="add-kpi-individu"><button type="submit" class="btn btn-info">Add KPI Internal (Non-IPPA)</button></a>
                                <div class="table-responsive">
                                    <table id="example24" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tahun</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>10020973</td>
                                                <td>Agustina A Y S</td>
                                                <td>2018</td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#viewKPI">View</button>
                                                    <a href="edit-kpi"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editKPI">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>10020972</td>
                                                <td>Aprilia N A</td>
                                                <td>2018</td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#viewKPI">View</button>
                                                    <a href="edit-kpi"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editKPI">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
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
    </div>

    <!-- Modal Remove -->
    <div class="modal fade" id="removePeople" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Remove Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>
                <img src="images/alert/Flat_cross_icon.svg.png" alt="images" width="20%" class="center">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Remove</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal View IPPA Button-->
    <div class="modal fade" id="viewIPPA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">List IPPA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
            <div>
                <div class="container">
                    <table id="example27" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIK</td>
                            <td>Nama</td>
                            <td>BSC</td>
                            <td>KPI Item</td>
                            <td>Bobot</td>
                            <td>Target</td>
                            <td>Actual</td>
                            <td>Ach.</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10020972</td>
                            <td>Aprilia Nur Aini</td>
                            <td>Internal Business Process</td>
                            <td>COE Compliance - Completion Audit Plan</td>
                            <td>20%</td>
                            <td>50%</td>
                            <td>80%</td>
                            <td>160%</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>10020972</td>
                            <td>Aprilia Nur Aini</td>
                            <td>Operational Excellence</td>
                            <td>Index Audit Customer Survey</td>
                            <td>5%</td>
                            <td>3</td>
                            <td>4</td>
                            <td>130%</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal View KPI Button-->
    <div class="modal fade" id="viewKPI" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">List KPI Internal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
            <div>
                <div class="container">
                    <table id="example26" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIK</td>
                            <td>Nama</td>
                            <td>BSC</td>
                            <td>KPI Item</td>
                            <td>Bobot</td>
                            <td>Target</td>
                            <td>Actual</td>
                            <td>Ach.</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10020972</td>
                            <td>Aprilia Nur Aini</td>
                            <td>Excellence</td>
                            <td>Quality Report</td>
                            <td>10%</td>
                            <td>80%</td>
                            <td>80%</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>10020972</td>
                            <td>Aprilia Nur Aini</td>
                            <td>Caring</td>
                            <td>Sharing IA Belajar</td>
                            <td>5%</td>
                            <td>4 kali</td>
                            <td>3 kali</td>
                            <td>75%</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'menu/footer.php'; ?>


</body>

</html>