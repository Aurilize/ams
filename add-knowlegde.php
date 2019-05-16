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
                <h3 class="text-primary">Training Knowledge</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Training Knowledge<</a></li>
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
                                            <label class="col-lg-2 col-form-label" for="val-username">Company <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="val-username" name="val-username" data-toggle="tooltip" title="Input Nama Auditor" value="PT. Bukit Makmur Mandiri Utama" disabled="true">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Nama Training <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="text" name="" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-username">Upload file(s) <span class="text-danger">*</span></label>
                                            <div class="col-lg-4">
                                                <input type="file" name="files" class="form-control" multiple>
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
