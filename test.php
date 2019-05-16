<!DOCTYPE html>
<html lang="en">

<style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 20%;
    }

    /*#example26 {
      table-layout: fixed;
      word-wrap: break-word;
    }*/

    /*.modal-body {
        overflow-x: auto;
    }*/

    /*#example26 {
      table-layout: fixed;
      word-wrap: break-word;
    }*/

    /*.modal-body {
        overflow-x: auto;
    }*/

    @media (min-width: 992px) {
    .modal-lg {
    max-width: 1280px !important;
  }

    .modal.modal-lg .modal-dialog {
  width: 95%;
  max-width: 1280px
}
.modal-wide .modal-body {
  overflow-y: auto;
  height: fixed;
}

#example26 {
      table-layout: fixed;
      word-wrap: break-word;
    }

/* irrelevant styling */
body { text-align: center; }
body p { 
  max-width: 400px; 
  margin: 20px auto; 
}
#tallModal .modal-body p{ margin-bottom: 900px }
  </style>

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
                <h3 class="text-primary">Risk Assessment</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Risk Assessment</a></li>
                    <li class="breadcrumb-item active">List</li>
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
                                <h1>Bootstrap 3 Variable-Width Modal</h1>
<p>I wanted to override the default Bootstrap modal so it's variable-width, and height-optimized.</p>
<p>Add "modal-wide" to the main modal div, and adjust the width in the CSS. In this example, I'm using 90%.</p>
<p>Since I'm using jQuery to set the max-height of the content area based on the browser dimensions, the modal will be only as tall as necessary, and will provide a scrollbar if needed.</p>

<a data-toggle="modal" href="#normalModal" class="btn btn-default">Normal</a>

<a data-toggle="modal" href="#tallModal" class="btn btn-primary">Wide, Tall Content</a>

<a data-toggle="modal" href="#shortModal" class="btn btn-primary">Wide, Short Content</a>

<div id="normalModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="tallModal" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
                
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="shortModal" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Remove -->
  

    <?php include_once 'menu/footer.php'; ?>


</body>

</html>