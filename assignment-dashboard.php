<!DOCTYPE html>
<html lang="en">

<?php include_once 'menu/header.php'; ?>

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
                <h3 class="text-primary">Dashboard</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row" >
                <div class="row" hidden="true">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4>Audit Plan</h4>
                        </div>
                        <div class="card-content">
                            <div id="b-line" style="height: 370px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4>KPI Internal Audit</h4>
                        </div>
                        <div class="card-content">
                            <div id="dynArea" style="height: 370px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" hidden="true">
                <div class="col-lg-6" hidden="true">
                    <div class="card">
                        <div class="card-title">
                            <h4>Auditor Workload</h4>
                        </div>
                        <div class="card-content">
                            <div id="radar" style="height: 370px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" hidden="true">
                    <div class="card">
                        <!--<div class="card-title">
                                <h4>PARFU (Open)</h4>
                                </div>-->
                        <div class="card-title">
                            <h4>PARFU</h4>
                        </div>
                        <div class="card-content">
                            <!-- <div style="text-align: right;">
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                                        data-target="#exampleModalCenter" data-toggle="tooltip" title="Click here!">
                                    Detail
                                </button>
                            </div> -->
                            <div id="basic-Pie" style="height: 370px"></div>
                        </div>
                        <!--<div class="media" style="height: 370px">
                            <!-- <div class="media-left meida media-middle">
                                <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                            </div> -->
                        <!--<div class="media-body">
                            <h1> <a href='#' data-toggle="modal" data-target="#modChart" data-source="70,13,20,90,44,12,30,30,30,10,5,0" data-target-source="34, 12"> 25 of 123 </a></h1>
                            <!-- <p class="m-b-0">Stores</p> -->
                        <!--                                </div>-->
                        <!--                            </div>-->
                    </div>
                </div>
            </div>
            <div class="row" hidden="true">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h3 align="center">Score Audit Per Site</h3>
                        </div>
                        <div class="card-content">
                            <div id="barScore" style="height: 370px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
            
                <div class="col-lg-12">
                    <div class="col-lg-12">
                    <div class="card">
                        <!--<div class="card-title">
                                <h4>PARFU (Open)</h4>
                                </div>-->
                        <div class="card-title">
                            <h4>Audit Assignment</h4>
                        </div>
                        <div class="card-content">
                            <!-- <div style="text-align: right;">
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                                        data-target="#exampleModalCenter" data-toggle="tooltip" title="Click here!">
                                    Detail
                                </button>
                            </div> -->
                            <div id="basic-Pie2" style="height: 370px"></div>
                            
                            <a href="add-assignment"><button type="submit" class="btn btn-info btn-block m-b-10">Add Assignment</button></a>                                 
                            <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Month</th>
                                                <th>Site</th>
                                                <th>Auditor</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 2069011 -->
                                            <tr>
                                                <td>1</td>
                                                <td><a href="assignment-detail"><u>2018</u></a></td>
                                                <td>January</td>
                                                <td>HO</td>
                                                <td>1. Marwalton Kemit <br> 2. Elfana Yolanda P <br> 3. Agnes Dyna S </td>
                                                <td><span class="label label-rouded label-success">Complete</span></td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><a href="assignment-detail"><u>2018</u></a></td>
                                                <td>February</td>
                                                <td>HO</td>
                                                <td>1. Agustina A Y S <br> 2. Adam Razadin I <br> 3. Elfana Y P </td>
                                                <td><span class="label label-rouded label-danger">Pending</span></td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><a href="assignment-detail"><u>2018</u></a></td>
                                                <td>February</td>
                                                <td>BIN</td>
                                                <td>1. Marwalton Kemit <br> 2. Aprilia N A <br> 3. Galuh P S </td>
                                                <td><span class="label label-rouded label-danger">Pending</span></td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><a href="assignment-detail"><u>2018</u></a></td>
                                                <td>March</td>
                                                <td>LAT</td>
                                                <td>1. Budi S <br> 2. Elfana Yolanda P <br> 3. Agnes Dyna S </td>
                                                <td><span class="label label-rouded label-warning">Not Started</span></td>
                                                <td><a href="assignment-detail"><button type="submit" class="btn btn-danger btn-xs">Detail</button></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        <!--<div class="media" style="height: 370px">
                            <!-- <div class="media-left meida media-middle">
                                <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                            </div> -->
                        <!--<div class="media-body">
                            <h1> <a href='#' data-toggle="modal" data-target="#modChart" data-source="70,13,20,90,44,12,30,30,30,10,5,0" data-target-source="34, 12"> 25 of 123 </a></h1>
                            <!-- <p class="m-b-0">Stores</p> -->
                        <!--                                </div>-->
                        <!--                            </div>-->
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
        <!-- End Page wrapper  -->
    </div>
    
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <?php include_once 'menu/footer.php'; ?>
    <!--<script type="text/javascript">
        $('#exampleModalCenter').modal('hide');
    </script> -->
    <!-- Modal -->


</body>

</html>