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

            <div class="row">
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4>Auditor Workload</h4>
                        </div>
                        <div class="card-content">
                            <div id="radar" style="height: 370px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <!--<div class="card-title">
                                <h4>PARFU (Open)</h4>
                                </div>-->
                        <div class="card-title">
                            <h4>PARFU</h4>
                        </div>
                        <div class="card-content">
                            <div style="text-align: right;">
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                                        data-target="#exampleModalCenter" data-toggle="tooltip" title="Click here!">
                                    Detail
                                </button>
                            </div>
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


            <!-- Button trigger modal -->

            <!-- End Container fluid  -->
            <!-- footer -->
            <!-- <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer> -->
            <!-- End footer -->
            <div class="modal fade" id="modChart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Open Status</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <canvas id="canvas" width="568" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
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
        </div>
        <!-- End Page wrapper  -->
    </div>
    <div class="modal fade hide in" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    PARFU
                    <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--<div id="barScore" style="height: 370px"></div>-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h3 align="center"><u>PARFU Status</u></h3>
                                </div>
                                <div class="card-content">
                                    <table style="width:100%" class="table table-dark table-hover">
                                        <tr>
                                            <th>Site</th>
                                            <th style="text-align: center">Open</th>
                                            <th style="text-align: center">On Progress</th>
                                            <th style="text-align: center">Closed</th>
                                        </tr>
                                        <tr>
                                            <td>SDJ</td>
                                            <td style="text-align: center">6</td>
                                            <td style="text-align: center">3</td>
                                            <td style="text-align: center">5</td>
                                        </tr>
                                        <tr>
                                            <td>Kideco</td>
                                            <td style="text-align: center">4</td>
                                            <td style="text-align: center">2</td>
                                            <td style="text-align: center">5</td>
                                        </tr>
                                        <tr>
                                            <td>Adaro</td>
                                            <td style="text-align: center">3</td>
                                            <td style="text-align: center">3</td>
                                            <td style="text-align: center">7</td>
                                        </tr>
                                        <tr>
                                            <td>BINSUA</td>
                                            <td style="text-align: center">5</td>
                                            <td style="text-align: center">2</td>
                                            <td style="text-align: center">9</td>
                                        </tr>
                                        <tr>
                                            <td>LATI</td>
                                            <td style="text-align: center">6</td>
                                            <td style="text-align: center">8</td>
                                            <td style="text-align: center">5</td>
                                        </tr>
                                        <tr>
                                            <td>PAD</td>
                                            <td style="text-align: center">0</td>
                                            <td style="text-align: center">2</td>
                                            <td style="text-align: center">0</td>
                                        </tr>
                                        <tr>
                                            <td>IBP</td>
                                            <td style="text-align: center">6</td>
                                            <td style="text-align: center">3</td>
                                            <td style="text-align: center">5</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>-->
            </div>
        </div>
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