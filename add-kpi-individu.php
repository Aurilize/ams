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
                <h3 class="text-primary">KPI Internal</h3></div>
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
                                    <form class="form-valide" action="people" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">KPI Category <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="ippa">IPPA</option>
                                                    <option value="internal">Internal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Tahun <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input KPI Item" value="2018" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">BSC <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="ibp">Internal Business Process</option>
                                                    <option value="oe">Operation Excellence</option>
                                                    <option value="sic">Strengthen company IC through Integrating Advisory Project</option>
                                                    <option value="exc">Excellence</option>
                                                    <option value="care">Caring</option>
                                                    <option value="int">Integrity</option>
                                                    <option value="team">Teamwork</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">KPI Item<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input KPI Item">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Bobot <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input KPI Item">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Target <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input KPI Item">
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


</body>

</html>
