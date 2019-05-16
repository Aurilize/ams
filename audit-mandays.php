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
                <h3 class="text-primary">Audit Mandays</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Audit Mandays</a></li>
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
                                <a href="add-mandays"><button type="submit" class="btn btn-info">Add Mandays</button></a>                                 
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>FTE</th>
                                                <th>Tahun</th>
                                                <th>Training Plan</th>
                                                <th>Training Actual</th>
                                                <th>Audit Plan</th>
                                                <th>Audit Actual</th>
                                                <th>Over Audit</th>
                                                <th>Over Training</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 2069011 -->
                                            <tr>
                                                <td>1</td>
                                                <td>10000001</td>
                                                <td>Fery Iriyawan</td>
                                                <td>150 Jam</td>
                                                <td>2018</td>
                                                <td>75 Jam</td>
                                                <td>55 Jam</td>
                                                <td>75 Jam</td>
                                                <td>100 Jam</td>
                                                <td><span class="label label-rouded label-danger">25 Jam</span></td>
                                                <td><span class="label label-rouded label-success">0 Jam</span></td>
                                                <td>
                                                    <a href="view-mandays"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#viewMandays">View</button>
                                                    <a href="edit-mandays"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>10000002</td>
                                                <td>Budi Supratman</td>
                                                <td>150 Jam</td>
                                                <td>2018</td>
                                                <td>75 Jam</td>
                                                <td>55 Jam</td>
                                                <td>75 Jam</td>
                                                <td>100 Jam</td>
                                                <td><span class="label label-rouded label-danger">25 Jam</span></td>
                                                <td><span class="label label-rouded label-success">0 Jam</span></td>
                                                <td>
                                                    <a href="view-mandays"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#viewMandays">View</button>
                                                    <a href="edit-mandays"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>10000003</td>
                                                <td>Marwalton Kemit</td>
                                                <td>150 Jam</td>
                                                <td>2018</td>
                                                <td>75 Jam</td>
                                                <td>55 Jam</td>
                                                <td>75 Jam</td>
                                                <td>100 Jam</td>
                                                <td><span class="label label-rouded label-danger">25 Jam</span></td>
                                                <td><span class="label label-rouded label-success">0 Jam</span></td>
                                                <td>
                                                    <a href="view-mandays"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#viewMandays">View</button>
                                                    <a href="edit-mandays"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>10000004</td>
                                                <td>Agustina A Y S</td>
                                                <td>150 Jam</td>
                                                <td>2018</td>
                                                <td>75 Jam</td>
                                                <td>55 Jam</td>
                                                <td>75 Jam</td>
                                                <td>100 Jam</td>
                                                <td><span class="label label-rouded label-danger">25 Jam</span></td>
                                                <td><span class="label label-rouded label-success">0 Jam</span></td>
                                                <td>
                                                    <a href="view-mandays"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#viewMandays">View</button>
                                                    <a href="edit-mandays"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>10000005</td>
                                                <td>Galuh Pandisiwi</td>
                                                <td>150 Jam</td>
                                                <td>2018</td>
                                                <td>75 Jam</td>
                                                <td>55 Jam</td>
                                                <td>75 Jam</td>
                                                <td>100 Jam</td>
                                                <td><span class="label label-rouded label-danger">25 Jam</span></td>
                                                <td><span class="label label-rouded label-success">0 Jam</span></td>
                                                <td>
                                                    <a href="view-mandays"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#viewMandays">View</button>
                                                    <a href="edit-mandays"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>10000006</td>
                                                <td>Elfana Y P</td>
                                                <td>150 Jam</td>
                                                <td>2018</td>
                                                <td>75 Jam</td>
                                                <td>55 Jam</td>
                                                <td>75 Jam</td>
                                                <td>100 Jam</td>
                                                <td><span class="label label-rouded label-danger">25 Jam</span></td>
                                                <td><span class="label label-rouded label-success">0 Jam</span></td>
                                                <td>
                                                    <a href="view-mandays"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#viewMandays">View</button>
                                                    <a href="edit-mandays"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>10000007</td>
                                                <td>Adam R I</td>
                                                <td>2018</td>
                                                <td>150 Jam</td>
                                                <td>75 Jam</td>
                                                <td>55 Jam</td>
                                                <td>75 Jam</td>
                                                <td>100 Jam</td>
                                                <td><span class="label label-rouded label-danger">25 Jam</span></td>
                                                <td><span class="label label-rouded label-success">0 Jam</span></td>
                                                <td>
                                                    <a href="view-mandays"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#viewMandays">View</button>
                                                    <a href="edit-mandays"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>10000008</td>
                                                <td>Agnes Dyna S</td>
                                                <td>150 Jam</td>
                                                <td>2018</td>
                                                <td>75 Jam</td>
                                                <td>55 Jam</td>
                                                <td>75 Jam</td>
                                                <td>100 Jam</td>
                                                <td><span class="label label-rouded label-danger">25 Jam</span></td>
                                                <td><span class="label label-rouded label-success">0 Jam</span></td>
                                                <td>
                                                    <a href="view-mandays"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#viewMandays">View</button>
                                                    <a href="edit-mandays"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                    <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>10000009</td>
                                                <td>Aprilia Nur A</td>
                                                <td>150 Jam</td>
                                                <td>2018</td>
                                                <td>75 Jam</td>
                                                <td>55 Jam</td>
                                                <td>75 Jam</td>
                                                <td>100 Jam</td>
                                                <td><span class="label label-rouded label-danger">25 Jam</span></td>
                                                <td><span class="label label-rouded label-success">0 Jam</span></td>
                                                <td>
                                                    <a href="view-mandays"><button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#viewMandays">View</button>
                                                    <a href="edit-mandays"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
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


    <!-- Modal Detail Mandays -->

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