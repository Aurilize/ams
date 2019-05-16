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
                <h3 class="text-primary">Audit Database</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Audit Database</a></li>
                    <li class="breadcrumb-item active">People</li>
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
                                            <label class="col-lg-4 col-form-label" for="val-username">Nama <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" data-toggle="tooltip" title="Input Nama Auditor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">NIK <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email" data-toggle="tooltip" title="Input NIK auditor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Tempat Lahir <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="val-password" data-toggle="tooltip" title="Input Tempat Lahir Auditor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggal Lahir <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" data-toggle="tooltip" title="Input nama auditor"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill"> Pendidikan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="s1">S1</option>
                                                    <option value="s2">S2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Status <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <label class="radio-inline"><input type="radio" name="optradio" checked>Active</label>
                                                <label class="radio-inline"><input type="radio" name="optradio">Inactive</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">No. HP <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number" name="val-number" data-toggle="tooltip" title="Input No. HP Auditor">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Tanggal Hire <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" id="datehire" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Tanggal End <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" id="enddate" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-range">Upload Photo <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input name="file" type="file" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-range">Training History <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#addTraining">Add Training</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Competency <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email" data-toggle="tooltip" title="Input auditor's competency">
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
                <div>
                    <table id="myTable" class=" table order-list"  width="100%">
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
                            <td >
                                <input type="text" name="training" class="form-control" />
                            </td>
                            <td>
                                <input type="text" name="by"  class="form-control"/>
                            </td>
                            <td>
                                <input type="text" name="location"  class="form-control"/>
                            </td>
                            <td>
                                <input type="text" name="year" class="form-control" />
                            </td>
                            <td ><a class="deleteRow"></a>

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
    $(document).ready(function () {
        var counter = 0;

        $("#addrow").on("click", function () {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td><input type="text" class="form-control" name="training' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="by' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="location' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" name="year' + counter + '"/></td>';

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