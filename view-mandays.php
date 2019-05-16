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
                                                    <select data-placeholder="Select Name" class="selectlead form-control" disabled="true">
                                                        <option value="">Select option below</option>
                                                        <option value="FI">Fery Iriyawan</option>
                                                        <option value="MK">Marwalton Kemit</option>
                                                        <option value="BS" selected>Budi Supratman</option>
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
                                                <input type="text" class="form-control" id="nik" name="val-email" data-toggle="tooltip" title="Input NIK auditor" disabled="true" value="1000002">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Tahun <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="" value="2018" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">FTE <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="150" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Training Plan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="75" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Audit Plan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="75" disabled>
                                            </div>
                                        </div>
                                        <hr>
                                        <h3><span class="label label-rouded label-success"><b> Training </b></span></h3>

                                        <div class="table-responsive">
                                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <td>No</td>
                                                        <td>Training</td>
                                                        <td>Penyelenggara</td>
                                                        <td>Tempat</td>
                                                        <td>Tahun</td>
                                                        <td>Mandays</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- 2069011 -->
                                                    <tr>
                                                        <td>1</td>
                                                        <td>CIA Training P1</td>
                                                        <td>IIA</td>
                                                        <td>Jakarta</td>
                                                        <td>2018</td>
                                                        <td>30 Jam</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>National Conference</td>
                                                        <td>IIA</td>
                                                        <td>Bali</td>
                                                        <td>2018</td>
                                                        <td>12 Jam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                        <h3><span class="label label-rouded label-danger"><b> Audit </b></span></h3>
                                        <div class="table-responsive">
                                            <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <td>No</td>
                                                        <td>Tahun</td>
                                                        <td>Site</td>
                                                        <td>Function</td>
                                                        <td>Activity</td>
                                                        <td>Mandays</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- 2069011 -->
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2018</td>
                                                        <td>HO</td>
                                                        <td>Logistic</td>
                                                        <td>AFCA</td>
                                                        <td>30 Jam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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