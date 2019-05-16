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
                <h3 class="text-primary">Mandays</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Mandays</a></li>
                    <li class="breadcrumb-item active">Add</li>
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
                                    <form class="form-valide" action="audit-mandays" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Nama  <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                    <select data-placeholder="Select Name" class="selectlead form-control">
                                                        <option value="">Select option below</option>
                                                        <option value="FI">Fery Iriyawan</option>
                                                        <option value="MK">Marwalton Kemit</option>
                                                        <option value="BS">Budi Supratman</option>
                                                        <option value="AY">Agustina A Y S</option>
                                                        <option value="EY">Elfana Y P</option>
                                                        <option value="AR">Adam Razadin</option>
                                                        <option value="AD">Agnes Dyna S</option>
                                                        <option value="AP">Aprilia Nur A</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">NIK <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nik" name="val-email" data-toggle="tooltip" title="Input NIK auditor" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Tahun <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Tempat Lahir Auditor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">FTE <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Training Plan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Audit Plan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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

    <!-- Modal Remove Button-->
    <div class="modal fade" id="addTraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Training</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>
                <div class="container">
                    <table id="myTable" class=" table order-list">
                    <thead>
                        <tr>
                            <td>Training</td>
                            <td>Penyelenggara</td>
                            <td>Tempat</td>
                            <td>Tahun</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="30%">
                                <input type="text" name="training" class="form-control" />
                            </td>
                            <td width="20%">
                                <input type="text" name="by"  class="form-control"/>
                            </td>
                            <td width="25%">
                                <input type="text" name="location"  class="form-control"/>
                            </td>
                            <td width="15%">
                                <input type="text" name="year" class="form-control" />
                            </td>
                            <td width="10%"><a class="deleteRow"></a>

                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align: left;">
                                <input type="button" class="btn btn-lg btn-block btn-success" id="addrow" value="Add Row" />
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </tfoot>
                </table>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Save</button>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'menu/footer.php'; ?>


</body>

<script type="text/javascript">
            $("#site").change(function() {
                $("#function").load("textdata/b000.txt");
                document.getElementById("auditee").value = "Amudi Sormin";
                /*console.log(document.getElementById("auditee").value);*/
            });
            $("#function").change(function() {
                $("#activity").load("textdata/plant.txt");
            });
            $("#activity").change(function() {
                $("#sub").load("textdata/sub.txt");
            });

            $(document).ready(function () {
                $('.datepic input').datepicker({
                    format: "dd/mm/yyyy",
                    todayBtn: "linked",
                    clearBtn: true,
                    autoclose: true,
                    todayHighlight: true
                });
            });

            $('.selectteam').select2({
                allowClear: true
            })

            $(".selectlead").select2({
            });

            $(".selectlead").change(function() {
                document.getElementById("nik").value = "10000001"
            });

            $("#actualmandays").change(function() {
                
                var actual = document.getElementById("actualmandays").value;
                var budget = document.getElementById("budget").value;

                if(actual > budget) {
                    console.log("a > b")
                }
                /*console.log(document.getElementById("auditee").value);*/
            });
        </script>

</html>