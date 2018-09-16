<!DOCTYPE html>
<html lang="en">

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
                <h3 class="text-primary">Audit Database</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Audit Database</a></li>
                    <li class="breadcrumb-item active">Administration</li>
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
                                <h4 class="card-title">Budgeting File</h4>
                                    <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#budgetModal">Add Budgeting File</button>
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama File</th>
                                                <th>Tahun</th>
                                                <th>Uploaded At</th>
                                                <th>Uploaded By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="files.txt">Budget 2018.xlxs</td>
                                                <td>2018</td>
                                                <td>29 Agustus 2018</td>
                                                <td>Fery Iriyawan</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-danger btn-xs">remove</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Surat Tugas</h4>
                                <!-- <h6 class="card-subtitle">Data table example</h6> -->
                                <a href="surat_tugas"><button type="submit" class="btn btn-info">Add Surat Tugas</button></a>
                                <div class="table-responsive">
                                    <table id="example24" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No ST</th>
                                                <th>Penugasan</th>
                                                <th>Jenis Surat Tugas</th>
                                                <th>Site</th>
                                                <th>Tahun</th>
                                                <th>File</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>001/SA/LAT/AFCA/VI/2018</td>
                                                <td>AFCA</td>
                                                <td>Spesial</td>
                                                <td>LATI</td>
                                                <td>2018</td>
                                                <td><a href="file.txt">Surat Tugas AFCA LATI 2018.docx</a></td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-warning btn-xs">Edit</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        <div class="card-body">
                                <h4 class="card-title">Audit Customer Satisfaction</h4>
                                    <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#acsModal">Upload ACS</button>
                                <div class="table-responsive">
                                    <table id="example25" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama File</th>
                                                <th>Tahun</th>
                                                <th>Uploaded At</th>
                                                <th>Uploaded By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="files.txt">ACS Kideco - AFCA 2018.xlxs</td>
                                                <td>2018</td>
                                                <td>29 Agustus 2018</td>
                                                <td>Adam Razadin I</td>
                                                <td><a href="edit-people"><button type="submit" class="btn btn-danger btn-xs">remove</button></td>
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

    <!-- Modal Budget Files-->
    <div class="modal fade" id="budgetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Budget File</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#"> <!-- class="dropzone" -->
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-range">Upload File <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input name="file" type="file"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-range">Tahun <span class="text-danger">*</span></label>
                    <div class="col-lg-2">
                        <input name="text" type="text"/>
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <button type="button" class="btn btn-primary btn-block m-b-10" data-dismiss="modal">Upload File</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal ACS-->
    <div class="modal fade" id="acsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload ACS File</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-body">
            <form action="#"> <!-- class="dropzone" -->
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-range">Upload File <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input name="file" type="file"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-range">Tahun <span class="text-danger">*</span></label>
                    <div class="col-lg-2">
                        <input name="text" type="text"/>
                    </div>
                </div>
            </form>
          </div>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <button type="button" class="btn btn-primary btn-block m-b-10" data-dismiss="modal">Upload File</button>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'menu/footer.php'; ?>


</body>

</html>