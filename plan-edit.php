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
                <h3 class="text-primary">Audit Universe</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Audit Universe</a></li>
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
                                                    <option value="b000" selected>Head Office</option>
                                                    <option value="b001">LATI</option>
                                                    <option value="b002">BIN</option>
                                                    <option value="b003">ADR</option>
                                                    <option value="b004">KDC</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Function <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="site" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="plant" selected>Plant</option>
                                                    <option value="operation">Operation</option>
                                                    <option value="hr">HR</option>  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Activity <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="activity" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="main" selected>Maintenance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Sub Activity <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="sub" name="val-skill">
                                                    <option value=""> Please select</option>
                                                    <option selected>Planning</option>
                                                    <option>Execution</option>
                                                    <option>Monitoring</option>
                                                </select>
                                            </div>
                                        </div>

                                        <hr>

                                        <h3><span class="label label-rouded label-success"><b> Control Environment </b></span></h3>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Management & Operation Style Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="3">
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="val-skill"> Clear Policy Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="3">
                                            </div>
                                        </div>

                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Clear Policy Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="3">
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Scope of Work Employee Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="2">
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="val-skill"> Complete Organization Structure Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="1">
                                            </div>
                                        </div>

                                        <hr>

                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Complete Organization Structure Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="1">
                                            </div>
                                        </div> -->

                                        <h3><span class="label label-rouded label-warning"><b> Risk Assessment </b></span></h3>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Inherent Level Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="2">
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="val-skill"> Operational Perfomance Cost Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="4">
                                            </div>
                                        </div>

                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Inherent Level Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" name="mgmt" class="form-control" value="4">
                                            </div>
                                        </div> -->

                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Operational Perfomance Cost Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="4">
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> EBITDA Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="4">
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="val-skill"> Parfu Outstanding Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="2">
                                            </div>
                                        </div>

                                        <hr>

                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Parfu Outstanding Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="2">
                                            </div>
                                        </div> -->

                                        <h3><span class="label label-rouded label-red"><b> Control Activities </b></span></h3>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Production Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="3">
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="val-skill"> UA Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="2">
                                            </div>
                                        </div>


                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> UA Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="2">
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> PTY Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="3">
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="val-skill"> Cashflow Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="3">
                                            </div>
                                        </div>

                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Cashflow Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="3">
                                            </div>
                                        </div>s -->

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Compliance Review Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="2">
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="val-skill"> Laporan Fraud Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="3">
                                            </div>
                                        </div>

                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Laporan Fraud Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="3">
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Last Audit Score (1-4) <span class="text-danger">*</span></label>
                                            <div class="col-lg-1">
                                                <input type="text" name="mgmt" class="form-control" value="2">
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