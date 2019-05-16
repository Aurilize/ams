<!DOCTYPE html>
<html lang="en">

<style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 20%;
    }

    /*#example26 {
      table-layout: fixed;
      word-wrap: break-word;
    }*/

    /*.modal-body {
        overflow-x: auto;
    }*/

    /*.modal.modal-wide .modal-dialog {
        width: 90%;
    }

    

    body { 
        text-align: center; }
    body p { 
        max-width: 400px; 
        margin: 20px auto; 
    }

    #detailRisk .modal-body p { 
        margin-bottom: 900px 
    }*/


  .modal-lg {
    max-width: 100% !important;
  }

        .modal-lg .modal-body {
        overflow-y: auto !important;
        overflow-x: auto !important;
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
                <h3 class="text-primary">Risk Assessment</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Risk Assessment</a></li>
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
                                <h4 class="card-title">Risk Assessment</h4>
                                    <a href="add-kpi-divisi"><button type="submit" class="btn btn-info">Add Risk</button></a>
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Site</th>
                                                <th>Function</th>
                                                <th>Activity</th>
                                                <th>Sub Activity</th>
                                                <th>Inherent</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Head Office</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Planning</td>
                                                <td><span class="label label-rouded label-danger">Extreme</span></td>
                                                <td>
                                                    <!-- <button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#viewIPPA">Detail</button>
                                                    <a href="edit-ippa"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editKPI">Edit</button></a> -->
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#detailRisk">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Head Office</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Execution</td>
                                                <td><span class="label label-rouded label-warning">High</span></td>
                                                <td>
                                                    <!-- <button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#viewIPPA">Detail</button>
                                                    <a href="edit-ippa"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editKPI">Edit</button></a> -->
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#detailRisk">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Head Office</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Monitoring</td>
                                                <td><span class="label label-rouded label-success">Low</span></td>
                                                <td>
                                                    <!-- <button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#viewIPPA">Detail</button>
                                                    <a href="edit-ippa"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editKPI">Edit</button></a> -->
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#detailRisk">Detail</button>
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

    <!-- Modal Remove -->
    <!-- Modal Detail Risk Button-->
    <div class="modal fade" id="detailRisk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Risk Management</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table id="example26" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0">
                <thead>
                    <th width="5%">No</th>
                    <th>Site</th>
                    <th>Function</th>
                    <th>Activity</th>
                    <th>Sub Activity</th>
                    <th>Risk</th>
                    <th>Inherent</th>
                    <th>Control</th>
                    <th>Residual</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Head Office</td>
                        <td>Plant</td>
                        <td>Maintenance</td>                                
                        <td>Planning</td>
                        <td>Improper Planning</td>
                        <td><span class="label label-rouded label-danger">Extreme</span></td>
                        <td>Define and Assess each item in planning and its risk </td>
                        <td><span class="label label-rouded label-primary">Medium</span></td>
                        <td>
                            <a href="edit-risk"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editRisk">Edit</button></a>
                            <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Head Office</td>
                        <td>Plant</td>
                        <td>Maintenance</td>
                        <td>Execution</td>
                        <td>Target not Achieve</td>
                        <td><span class="label label-rouded label-danger">Extreme</span></td>
                        <td>Daily monitoring</td>
                        <td><span class="label label-rouded label-primary">Medium</span></td>
                        <td>
                                <!-- <button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#viewRisk">View</button> -->
                                <a href="edit-risk"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editRisk">Edit</button></a>
                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Remove Button-->
    <div class="modal fade" id="removePeople" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Remove Risk Assessment</h5>
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

    <?php include_once 'menu/footer.php'; ?>


</body>

</html>