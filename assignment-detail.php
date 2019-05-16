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
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#team" role="tab" aria-controls="home" aria-selected="true">Team</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ar" role="tab" aria-controls="profile" aria-selected="false">Analytical Review</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#wp" role="tab" aria-controls="contact" aria-selected="false">Working Paper</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ac" role="tab" aria-controls="contact" aria-selected="false">Audit Confirmation</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#close" role="tab" aria-controls="contact" aria-selected="false">Closing PPT</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#report" role="tab" aria-controls="contact" aria-selected="false">Report</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#sa" role="tab" aria-controls="contact" aria-selected="false">Status Audit</a>
                                  </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-validation">
                                                    <!-- <form class="form-valide"> -->
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Manager In Charge </b></label>
                                                            <div class="col-lg-6">
                                                                Fery Iriyawan
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Superintendent </b></label>
                                                            <div class="col-lg-6">
                                                                Marwalton Kemit
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Leader </b></label>
                                                            <div class="col-lg-6">
                                                                Elfana Yolanda P
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Member Team</b></label>
                                                            <div class="col-lg-6">
                                                                Agnes Dyna
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Total Mandays</b></label>
                                                            <div class="col-lg-6">
                                                                <span class="label label-rouded label-success"><b>20 Days</b></span>
                                                            </div>
                                                        </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <div class="tab-pane fade" id="ar" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-validation">
                                                    <!-- <form class="form-valide"> -->
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Upload File Analytical Review</b></label>
                                                            <div class="col-lg-6">
                                                                <input name="file" type="file"/>
                                                            </div>
                                                        </div>

                                                        <h3><span class="label label-rouded label-danger"><b> Key Issue </b></span></h3>

                                                        <div class="table-responsive">
                                                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Process</th>
                                                                        <th>Focus based on</th>
                                                                        <th>Assessment</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- 2069011 -->
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Planning</td>
                                                                        <td><input type="text" name="" class="col-lg-12"></td>
                                                                        <td>
                                                                            <select class="form-control" id="val-skill" name="val-skill">
                                                                                <option value="">Please select</option>
                                                                                <option value="e">Extreme</option>
                                                                                <option value="h">High</option>
                                                                                <option value="m">Medium</option>
                                                                                <option value="l">Low</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Monitoring</td>
                                                                        <td><input type="text" name="" class="col-lg-12"></td>
                                                                        <td>
                                                                            <select class="form-control" id="val-skill" name="val-skill">
                                                                                <option value="">Please select</option>
                                                                                <option value="e">Extreme</option>
                                                                                <option value="h">High</option>
                                                                                <option value="m">Medium</option>
                                                                                <option value="l">Low</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Execution</td>
                                                                        <td><input type="text" name="" class="col-lg-12"></td>
                                                                        <td>
                                                                            <select class="form-control" id="val-skill" name="val-skill">
                                                                                <option value="">Please select</option>
                                                                                <option value="e">Extreme</option>
                                                                                <option value="h">High</option>
                                                                                <option value="m">Medium</option>
                                                                                <option value="l">Low</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-8 ml-auto">
                                                                <button type="submit" class="btn btn-primary col-lg-4">Submit</button>
                                                                <button type="submit" class="btn btn-success col-lg-4">Complete</button>
                                                            </div>
                                                        </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                  <div class="tab-pane fade" id="wp" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="card">
                                            <div class="card-body">
                                                <div class="form-validation">
                                                    <!-- <form class="form-valide"> -->
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Upload File Working Paper</b></label>
                                                            <div class="col-lg-6">
                                                                <input name="file" type="file"/>
                                                            </div>
                                                        </div>

                                                        <h3><span class="label label-rouded label-danger"><b> Key Issue </b></span></h3>

                                                        <div class="table-responsive">
                                                            <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Process</th>
                                                                        <th>Issue</th>
                                                                        <th>Audit Program</th>
                                                                        <th>Auditor</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- 2069011 -->
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Planning</td>
                                                                        <td>Budget yang ditetapkan tidak sesuai dengan kebutuhan actual</td>
                                                                        <td>Membandingkan data budget dengan actual</td>
                                                                        <td>1. Marwalton Kemit <br> 2. Elfana Yolanda P <br> 3. Agnes Dyna S</td>
                                                                        <td>
                                                                            <span class="label label-rouded label-success">Complete</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Monitoring</td>
                                                                        <td>Tidak terdapat monitoring bulanan</td>
                                                                        <td><input type="text" name="" class="col-lg-12"></td>
                                                                        <td>1. Marwalton Kemit <br> 2. Elfana Yolanda P <br> 3. Agnes Dyna S</td>
                                                                        <td>
                                                                            <a href="plan-detail"><button type="submit" class="btn btn-warning btn-xs">Complete</button></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Execution</td>
                                                                        <td>Kesalahan input data</td>
                                                                        <td><input type="text" name="" class="col-lg-12"></td>
                                                                        <td>1. Marwalton Kemit <br> 2. Elfana Yolanda P <br> 3. Agnes Dyna S</td>
                                                                        <td>
                                                                            <a href="plan-detail"><button type="submit" class="btn btn-warning btn-xs">Complete</button></a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-8 ml-auto">
                                                                <button type="submit" class="btn btn-primary col-lg-4">Submit</button>
                                                                <button type="submit" class="btn btn-success col-lg-4">Complete</button>
                                                            </div>
                                                        </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                  <div class="tab-pane fade" id="ac" role="tabpanel" aria-labelledby="profile-tab">
                                      <div class="card">
                                            <div class="card-body">
                                                <div class="form-validation">
                                                    <!-- <form class="form-valide"> -->
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Upload File Final Issue</b></label>
                                                            <div class="col-lg-6">
                                                                <input name="file" type="file"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-8 ml-auto">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                <button type="submit" class="btn btn-success">Complete</button>
                                                            </div>
                                                        </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                  <div class="tab-pane fade" id="close" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="card">
                                            <div class="card-body">
                                                <div class="form-validation">
                                                    <!-- <form class="form-valide"> -->
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Upload File Closing (.pptx)</b></label>
                                                            <div class="col-lg-6">
                                                                <input name="file" type="file"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-8 ml-auto">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                <button type="submit" class="btn btn-success">Complete</button>
                                                            </div>
                                                        </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                  <div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="profile-tab">
                                      <div class="card">
                                            <div class="card-body">
                                                <div class="form-validation">
                                                    <!-- <form class="form-valide"> -->
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Report Audit</b></label>
                                                            <div class="col-lg-6">
                                                                <input name="file" type="file"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Audit Score</b></label>
                                                            <div class="col-lg-6">
                                                                <input type="text" name="mgmt" class="form-control col-lg-2"><span class="label label-rouded label-success"> Status will be here</span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-8 ml-auto">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                <button type="submit" class="btn btn-success">Complete</button>
                                                            </div>
                                                        </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                  <div class="tab-pane fade" id="sa" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="card">
                                            <div class="card-body">
                                                <div class="form-validation">
                                                    <!-- <form class="form-valide"> -->
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Upload File Sign Off</b></label>
                                                            <div class="col-lg-6">
                                                                <input name="file" type="file"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username"><b>Sign Off Status</b></label>
                                                            <div class="col-lg-4">
                                                                <select class="form-control" id="val-skill" name="val-skill">
                                                                    <option value="" selected>Please Select Option Below</option>
                                                                    <option value="complete">Complete</option>
                                                                    <option value="pending">Pending</option>
                                                                    <option value="outstanding">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-8 ml-auto">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                <button type="submit" class="btn btn-success">Complete</button>
                                                            </div>
                                                        </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                  </div>
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