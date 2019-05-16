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
                                <h4 class="card-title">List Audit Universe</h4>
                                    <!-- <a href="add-audituniverse"><button type="submit" class="btn btn-info">Add Audit Universe</button></a> -->
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Site</th>
                                                <th>Function</th>
                                                <th>PM/CEO</th>
                                                <th>General Manager</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Head Office</td>
                                                <td>Plant</td>
                                                <td>Ronald S</td>
                                                <td>1. I Made Yatna<br>2. Iwan Prasetyo<br>3. Leonard Tambunan</td>
                                                <td><button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#detailUniverse">Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Head Office</td>
                                                <td>Plant</td>
                                                <td>Ronald S</td>
                                                <td>1. I Made Yatna<br>2. Iwan Prasetyo<br>3. Leonard Tambunan</td>
                                                <td><button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#detailUniverse">Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Head Office</td>
                                                <td>Plant</td>
                                                <td>Ronald S</td>
                                                <td>1. I Made Yatna<br>2. Iwan Prasetyo<br>3. Leonard Tambunan</td>
                                                <td><button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#detailUniverse">Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Head Office</td>
                                                <td>Operation</td>
                                                <td>Ronald S</td>
                                                <td>1. Afrizal</td>
                                                <td><button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#detailUniverse">Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Head Office</td>
                                                <td>Operation</td>
                                                <td>Ronald S</td>
                                                <td>1. Afrizal</td>
                                                <td><button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#detailUniverse">Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Head Office</td>
                                                <td>Operation</td>
                                                <td>Ronald S</td>
                                                <td>1. Afrizal</td>
                                                <td><button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#detailUniverse">Detail</button></td>
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
    <div class="modal fade" id="detailUniverse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Audit Universe</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table id="example26" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Site</th>
                                                <th>Function</th>
                                                <th>Activity</th>
                                                <th>Sub Activity</th>
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
                                                <td>
                                                    <a href="edit-audituniverse"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editRisk">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Head Office</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Execution</td>
                                                <td>
                                                    <a href="edit-audituniverse"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editRisk">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Head Office</td>
                                                <td>Plant</td>
                                                <td>Maintenance</td>
                                                <td>Monitoring</td>
                                                <td>
                                                    <a href="edit-audituniverse"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editRisk">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Head Office</td>
                                                <td>Operation</td>
                                                <td>Setting Fleet</td>
                                                <td>Planning</td>
                                                <td>
                                                    <a href="edit-audituniverse"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editRisk">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Head Office</td>
                                                <td>Operation</td>
                                                <td>Setting Fleet</td>
                                                <td>Execution</td>
                                                <td>
                                                    <a href="edit-audituniverse"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editRisk">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Head Office</td>
                                                <td>Operation</td>
                                                <td>Setting Fleet</td>
                                                <td>Monitoring</td>
                                                <td>
                                                    <a href="edit-audituniverse"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#editRisk">Edit</button></a>
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
            <h5 class="modal-title" id="exampleModalLabel">Remove Auditor</h5>
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