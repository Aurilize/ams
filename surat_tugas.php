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
                <h3 class="text-primary">Audit Database</h3></div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Audit Database</a></li>
                    <li class="breadcrumb-item active">Suat Tugas</li>
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
                                    <form class="form-valide" action="administration" method="post" id="data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">No. Surat Tugas <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-st" name="val-st" placeholder="Auto Generate" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Jenis Penugasan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill" >
                                                    <option value="">Please select</option>
                                                    <option value="I">Reguler Audit</option>
                                                    <option value="II">Spesial Audit</option>
                                                    <option value="III">Management Request</option>
                                                    <option value="IV">Investigasi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Judul Penugasan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Judul Penugasan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Bulan Penugasan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill" >
                                                    <option value="">Please select</option>
                                                    <option value="I">Januari</option>
                                                    <option value="II">Februari</option>
                                                    <option value="III">Maret</option>
                                                    <option value="IV">April</option>
                                                    <option value="V">Mei</option>
                                                    <option value="VI">Juni</option>
                                                    <option value="VII">Juli</option>
                                                    <option value="VIII">Agustus</option>
                                                    <option value="IX">September</option>
                                                    <option value="X">Oktober</option>
                                                    <option value="XI">November</option>
                                                    <option value="XII">Desember</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Site <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-site" name="val-skill" >
                                                    <option value="">Please select</option>
                                                    <option value="I">LAT</option>
                                                    <option value="II">BIN</option>
                                                    <option value="III">ADR</option>
                                                    <option value="IV">KDC</option>
                                                    <option value="V">IBP</option>
                                                    <option value="VI">PAD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Leader Penugasan <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" placeholder="Nama Leader">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Anggota Tim <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" placeholder="Nama Member">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password"><span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="button" id="addnew" class="btn btn-warning" value="add">
                                                <input type="hidden" id="items" name="items" value="1" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Tanggal Mulai <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" id="datehire" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Tanggal Selesai <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" id="enddate" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Tanggal Pembuatan Surat Tugas <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" id="enddate" class="form-control" placeholder="dd/mm/yyyy" disabled="true" value="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-success" style="margin: 5px">Save as Draft</button>
                                            </div>
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" style="margin: 5px">Save & Generate</button>
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

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type='text/javascript'>
//<![CDATA[
 $(document).ready(function() {
  var currentItem = 1;
  $('#addnew').click(function(){
   currentItem++;
   $('#items').val(currentItem);
var strToAdd = '<tr><td>Year</td><td>:</td><td><select name="year'+currentItem+'" id="year'+currentItem+'" ><option value="2012">2012</option><option value="2011">2011</option></select></td><td>Month</td><td>:</td><td width="17%"><select name="month'+currentItem+'" id="month'+currentItem+'"><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select></td><td width="7%">Week</td><td width="3%">:</td><td width="17%"><select name="week'+currentItem+'" id="week'+currentItem+'" ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></td><td width="8%">&nbsp;</td><td colspan="2">&nbsp;</td></tr><tr><td>Actual</td><td>:</td><td width="17%"><input name="actual'+currentItem+'" id="actual'+currentItem+'" type="text" /></td><td width="7%">Max</td> <td width="3%">:</td><td><input name="max'+currentItem+'" id ="max'+currentItem+'"type="text" /></td><td>Target</td><td>:</td><td><input name="target'+currentItem+'" id="target'+currentItem+'" type="text" /></td></tr>';
   $('#data').append(strToAdd);
   
  });
 });

//]]>
</script>
    <?php include_once 'menu/footer.php'; ?>


</body>

</html>