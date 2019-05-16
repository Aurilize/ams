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
                <h3 class="text-primary">Project Modul</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Project Modul<</a></li>
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
                                    <form class="form-valide" action="knowledge-management" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Company <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" data-toggle="tooltip" title="Input Nama Auditor" value="PT. Bukit Makmur Mandiri Utama" disabled="true">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Project <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" name="project" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Tahun <span class="text-danger">*</span></label>
                                            <div class="col-lg-2">
                                                <input type="text" name="project" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Lead Auditor  <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
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
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Team Member  <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
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
                                            <label class="col-lg-4 col-form-label" for="val-username">Plan Date <span class="text-danger">*</span></label>
                                            <div class="datepic col-lg-2">
                                                <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Actual Plan <span class="text-danger">*</span></label>
                                            <div class="datepic col-lg-2">
                                                <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Reason <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" name="reason" class="form-control" id="val-username" name="val-username">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> PICA <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" name="pica" class="form-control" id="val-username" name="val-username">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-skill"> Sub Activity <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <select class="form-control" id="sub" name="val-skill">
                                                    <option value=""> Please select option above</option>
                                                </select>
                                            </div>
                                        </div> -->

                                        
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

        $(document).ready(function () {
        var counter = 0;

        $("#addrow").on("click", function () {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="text" class="form-control" name="training' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="by' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="location' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="year' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="training' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="by' + counter + '"/></td>';

            cols += '<td><input type="button" class="ibtnDel btn btn-xs btn-danger "  value="Delete"></td>';
            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++;
        });



        $("table.order-list").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();       
            counter -= 1
        });
    });
        

    </script>

</html>
