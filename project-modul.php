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
                <h3 class="text-primary">Project Modul</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Project Modul</a></li>
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
                                <h4 class="card-title">Project Modul</h4>
                                <a href="add-modul"><button type="submit" class="btn btn-info">Add Project Modul</button></a>                          
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <!-- <th>Site</th> -->
                                                <th>Project</th>
                                                <th>Status</th>
                                                <th>Reason</th>
                                                <th>Corrective Action</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 2069011 -->
                                            <tr>
                                                <td>1</td>
                                                <td>2018</td>
                                                <!-- <td>LATI</td> -->
                                                <td>AFCA</td>
                                                <td><span class="label label-rouded label-success">Over Target</span></td>
                                                <td>Delay Assignment</td>
                                                <td>Corrective action will show here</td>
                                                <td>
                                                    <a href="edit-modul"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2018</td>
                                                <!-- <td>KDC</td> -->
                                                <td>DWS</td>
                                                <td><span class="label label-rouded label-success">Over Target</span></td>
                                                <td>Delay Assignment</td>
                                                <td>Corrective action will show here</td>
                                                <td>
                                                    <a href="edit-modul"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
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


    <!-- Modal Detail Universe -->

    <!-- Modal Remove Button-->
    <div class="modal fade" id="removePeople" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Remove Project Modul</h5>
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