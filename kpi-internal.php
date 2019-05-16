<!DOCTYPE html>
<html lang="en">

<?php include_once 'menu/header.php'; ?>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<?php include_once 'menu/preloader.php'; ?>
<style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 20%;
    }
  </style>
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
                                <div class="form-validation">
                                    <form class="form-valide" action="add_audituniverse" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Company <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" data-toggle="tooltip" title="Input Nama Auditor" value="PT. Bukit Makmur Mandiri Utama" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Site <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="site" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="b000">Head Office</option>
                                                    <option value="b001">LATI</option>
                                                    <option value="b002">BIN</option>
                                                    <option value="b003">ADR</option>
                                                    <option value="b004">KDC</option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#addSite" style="margin: 5px">Add</button>
                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="collapse" data-target="#collapseSite" aria-expanded="false" aria-controls="collapseSite" style="margin: 5px">List</button>
                                        </div>
                                        <div class="collapse" id="collapseSite">
                                          <div class="card card-body">
                                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Site</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Head Office</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editSite">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#remove">Remove</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>LATI</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editSite">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>BINUNGAN</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#removePeople">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#removePeople">Remove</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Function <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="function" name="val-skill">
                                                    <option value=""> Please select option above</option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#addFunction" style="margin: 5px">Add</button>
                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="collapse" data-target="#collapseFunction" aria-expanded="false" aria-controls="collapseFunction" style="margin: 5px">List</button>
                                        </div>
                                        <div class="collapse" id="collapseFunction">
                                          <div class="card card-body">
                                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Site</th>
                                                        <th>Function</th>
                                                        <th>General Manager</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Head Office</td>
                                                        <td>Plant</td>
                                                        <td>1. I Made Yatna<br>2. Iwan Prasetyo<br>3. Leonard Tambunan</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editFunction">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#remove">Remove</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Head Office</td>
                                                        <td>Operation</td>
                                                        <td>1. Afrizal</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editFunction">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#remove">Remove</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Head Office</td>
                                                        <td>HR</td>
                                                        <td>1. M. Najib Khaidar<br>2. Nanang Rizal Achyar</td>
                                                        <td>
                                                            <button type="submit" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editFunction">Edit</button>
                                                            <button type="submit" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#remove">Remove</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Activity <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="activity" name="val-skill">
                                                    <option value=""> Please select option above</option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#addActivity" style="margin: 5px">Add</button>
                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="collapse" data-target="#collapseActivity" aria-expanded="false" aria-controls="collapseActivity" style="margin: 5px">List</button>
                                        </div>
                                        <div class="collapse" id="collapseActivity">
                                          <div class="card card-body">
                                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Site</th>
                                                        <th>Function</th>
                                                        <th>Activity</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Head Office</td>
                                                        <td>Plant</td>
                                                        <td>Maintenance</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editActivity">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#remove">Remove</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Sub Activity <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="sub" name="val-skill">
                                                    <option value=""> Please select option above</option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#addSub" style="margin: 5px">Add</button>
                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="collapse" data-target="#collapseSub" aria-expanded="false" aria-controls="collapseSub" style="margin: 5px">List</button>
                                        </div>
                                        <div class="collapse" id="collapseSub">
                                          <div class="card card-body">
                                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
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
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editSub">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#remove">Remove</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Head Office</td>
                                                        <td>Plant</td>
                                                        <td>Maintenance</td>
                                                        <td>Execution</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editSub">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#remove">Remove</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Head Office</td>
                                                        <td>Plant</td>
                                                        <td>Maintenance</td>
                                                        <td>Monitoring</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editSub">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#remove">Remove</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                          </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Site Button-->
    <div class="modal fade" id="addSite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Universe Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
            <div>
                <div class="container">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Site <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Production last year <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Production Last Year">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">PM Name <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input PM Name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Add Function Button-->
    <div class="modal fade" id="addFunction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Function Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
            <div>
                <div class="container">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Site <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Head Office" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Function <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">General Manager Name <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Add Activity Button-->
    <div class="modal fade" id="addActivity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Activity Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
            <div>
                <div class="container">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Site <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Head Office" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Function <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Plant" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Activity <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Activity" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Add Sub Button-->
    <div class="modal fade" id="addSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sub Activity Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
          <div>
                <div class="container">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Site <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Head Office" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Function <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Plant" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Activity <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Maintenance" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Sub Activity <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Sub Activity" >
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit Site Button-->
    <div class="modal fade" id="editSite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Universe Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
            <div>
                <div class="container">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Site <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Head Office">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Production last year <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Production Last Year" value="OB: 10 Juta BCM, Coal: 5 Juta Ton">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">PM/CEO Name <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input PM Name" value="Ronald S">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit Function Button-->
    <div class="modal fade" id="editFunction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Function Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
            <div>
                <div class="container">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Site <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Head Office" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Function <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Plant">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">General Manager Name <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <textarea class="form-control" rows="5">1. I Made Yatna 2. Iwan Prasetyo 3. Leonard Tambunan</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Add Activity Button-->
    <div class="modal fade" id="editActivity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Activity Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
            <div>
                <div class="container">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Site <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Head Office" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Function <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Plant" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Activity <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Activity" value="Maintenance">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Add Sub Button-->
    <div class="modal fade" id="editSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sub Activity Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
          <div>
                <div class="container">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Site <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Head Office" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Function <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Plant" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Activity <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Site" value="Maintenance" disabled="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="val-password">Sub Activity <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Sub Activity" value="Monitoring">
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Remove Button-->
    <div class="modal fade" id="remove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <?php include_once 'menu/footer.php'; ?>

    <script type="text/javascript">
        $("#site").change(function() {
            $("#function").load("textdata/b000.txt");
            console.log('change');
        });
        $("#function").change(function() {
            $("#activity").load("textdata/plant.txt");
        });
        $("#activity").change(function() {
            $("#sub").load("textdata/sub.txt");
        });
    </script>

</body>

</html>