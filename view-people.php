<!DOCTYPE html>
<html lang="en">

<?php include_once 'menu/header.php'; ?>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<?php include_once 'menu/preloader.php'; ?>
<style type="text/css" media="screen">
    input[type="radio"]{
  margin: 0 10px 0 10px;
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
                                    <form class="form-valide" action="people" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nama <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" data-toggle="tooltip" title="Input Nama Auditor" value="Aprilia" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">NIK <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email" data-toggle="tooltip" title="Input NIK auditor" value="10020972" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Tempat Lahir <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Tempat Lahir Auditor" value="Kebumen" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggal Lahir <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy" value="2017-06-01" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" data-toggle="tooltip" title="Input Alamat auditor" disabled="true">The Honey Lady Lt. 10</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Pendidikan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill" disabled="true">
                                                    <option value="">Please select</option>
                                                    <option value="s1" selected>S1</option>
                                                    <option value="s2">S2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Status <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <label class="radio-inline"><input type="radio" name="optradio" checked disabled="true">Active</label>
                                                <label class="radio-inline"><input type="radio" name="optradio" disabled="true">Inactive</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">No. HP <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number" name="val-number" data-toggle="tooltip" title="Input No. HP Auditor" value="081301019999" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Tanggal Hire <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" id="datehire" class="form-control" placeholder="dd/mm/yyyy" value="2017-06-01" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Tanggal End <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" id="enddate" class="form-control" placeholder="dd/mm/yyyy" value="2099-12-31" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-range">Upload Photo <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input name="file" type="file" disabled="true"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-range">Training History <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#addTraining">List Training</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Competency <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email" data-toggle="tooltip" title="Input auditor's competency" value="IT Auditing; PHP; MySQL; javascript;" disabled="true">
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

    <!-- Modal Add Button-->
    <div class="modal fade" id="addTraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">List Training</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-lg">
            <div>
                <div class="container">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Training</td>
                            <td>Penyelenggara</td>
                            <td>Tempat</td>
                            <td>Tahun</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>IDEA Analytics Tools</td>
                            <td>Insight Consulting</td>
                            <td>Jakarta</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Fundamental of IT Auditing</td>
                            <td>IIA Indonesia</td>
                            <td>Jakarta</td>
                            <td>2018</td>
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