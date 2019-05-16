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
                <h3 class="text-primary">KPI Divisi</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">KPI Divisi</a></li>
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
                                    <form class="form-valide" action="assignment" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Company <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="val-username" name="val-username" data-toggle="tooltip" title="Input Nama Auditor" value="PT. Bukit Makmur Mandiri Utama" disabled="true">
                                            </div>

                                            <label class="col-lg-2 col-form-label" for="val-username">Nama Auditee <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" id="auditee" class="form-control" disabled="true">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-skill"> Site <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <select class="form-control" id="site" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="b000">Head Office</option>
                                                    <option value="b001">LATI</option>
                                                    <option value="b002">BIN</option>
                                                    <option value="b003">ADR</option>
                                                    <option value="b004">KDC</option>
                                                </select>
                                            </div>

                                            <label class="col-lg-2 col-form-label" for="val-skill"> Function <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <select class="form-control" id="function" name="val-skill">
                                                    <option value=""> Please select option above</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-skill"> Activity <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <select class="form-control" id="activity" name="val-skill">
                                                    <option value=""> Please select option above</option>
                                                </select>
                                            </div>

                                            <label class="col-lg-2 col-form-label" for="val-skill"> Sub Activity <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <select class="form-control" id="sub" name="val-skill">
                                                    <option value=""> Please select option above</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-skill"> Audit Type <span class="text-danger">*</span></label>
                                            <div class="col-lg-10">
                                                <select class="form-control" id="audittype" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="1">Regular Audit</option>
                                                    <option value="2">Special Audit</option>
                                                    <option value="3">Investigation</option>
                                                </select>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Manager in Charge <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" name="" class="form-control">
                                            </div>

                                            <label class="col-lg-2 col-form-label" for="val-username">Superitendent in Charge <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" name="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Periode Start <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <div class="datepic">
                                                  <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                </div>
                                            </div>

                                            <label class="col-lg-2 col-form-label" for="val-username">Periode End <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <div class="datepic">
                                                  <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                                </div>
                                                <!-- <input type="date" name="" class="form-control" class="year-calendar"> -->
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-password">Lead Auditor  <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                    <select data-placeholder="Select Lead" class="selectlead form-control" multiple="multiple">
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

                                            <label class="col-lg-2 col-form-label" for="val-password">Team Member  <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                    <select data-placeholder="Select member(s)" class="selectteam form-control" multiple="multiple">
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
                                            <label class="col-lg-2 col-form-label" for="val-skill"> Budget Mandays <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="14" disabled="true" id="budget"> 
                                            </div>

                                            <label class="col-lg-3 col-form-label" for="val-skill"></label>

                                            <label class="col-lg-2 col-form-label" for="val-skill"> Actual Mandays <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" class="form-control" id="actualmandays">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" id="tombol">Submit</button>
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
             maximumSelectionLength: 1
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
