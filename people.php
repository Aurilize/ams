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
                <h3 class="text-primary">Audit Database</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Audit Database</a></li>
                    <li class="breadcrumb-item active">People</li>
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
                                <h4 class="card-title">List Auditor</h4>
                                    <a href="add-people"><button type="submit" class="btn btn-info">Add Auditor</button></a>
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Age</th>
                                                <th>Hire Year</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Age</th>
                                                <th>Hire Year</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Fery Iriyawan</td>
                                                <td>General Manager</td>
                                                <td>35</td>
                                                <td>2017</td>
                                                <td>Active</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td>
                                            </tr>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Agustin Simatupang</td>
                                                <td>Superintendent</td>
                                                <td>40</td>
                                                <td>2012</td>
                                                <td>Inactive</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td></td>
                                            </tr>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Budi Supratman</td>
                                                <td>Officer</td>
                                                <td>39</td>
                                                <td>2012</td>
                                                <td>Active</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td></td>
                                            </tr>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Marwalton Kemit</td>
                                                <td>Officer</td>
                                                <td>32</td>
                                                <td>2013</td>
                                                <td>Active</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td></td>
                                            </tr>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Agustina A.Y Simanjuntak</td>
                                                <td>Officer</td>
                                                <td>29</td>
                                                <td>2013</td>
                                                <td>Active</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td></td>
                                            </tr>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Galuh Pandusiwi</td>
                                                <td>Officer</td>
                                                <td>29</td>
                                                <td>2018</td>
                                                <td>Active</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td></td>
                                            </tr>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Elfana Yolanda P</td>
                                                <td>Officer</td>
                                                <td>27</td>
                                                <td>2018</td>
                                                <td>Active</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td></td>
                                            </tr>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Agnes Dyna S</td>
                                                <td>Officer</td>
                                                <td>25</td>
                                                <td>2018</td>
                                                <td>Active</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td></td>
                                            </tr>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Adam Razadin I</td>
                                                <td>Officer</td>
                                                <td>25</td>
                                                <td>2017</td>
                                                <td>Active</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td></td>
                                            </tr>
                                            <tr>
                                                <td>10019972</td>
                                                <td>Aprilia Nur A</td>
                                                <td>Officer</td>
                                                <td>24</td>
                                                <td>2018</td>
                                                <td>Active</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button></td></td>
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