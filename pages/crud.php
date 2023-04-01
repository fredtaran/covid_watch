<?php
include_once '../header.php';

// Generate CSRF Token
$_SESSION['csrf_token'] = password_hash(random_bytes(60), PASSWORD_BCRYPT);


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Patient Log</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Patient Log</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Total Log: <span id="total_log">0</span></h3>
                    <div class="card-tools">
                        <button type="button" id="addform" class="btn btn-primary">Add new log</button>
                    </div>
                </div>
                <div class="card-body table-responsive p-0" style="height: 25rem;">
                    <table id="tbl" class="table table-head-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="5%" rowspan="2">#</th>
                                <th width="15%" rowspan="2"></th>
                                <th width="25%" rowspan="2">Name</th>
                                <th width="5%" rowspan="2">Age</th>
                                <th width="5%" rowspan="2">Gender</th>
                                <th width="10%" rowspan="2">Contact No.</th>
                                <th width="10%" rowspan="2">Body Temp</th>
                                <th width="10%" rowspan="2">Nationality</th>
                                <th width="5%">Diagnose</th>
                                <th width="5%">Encounter</th>
                                <th width="5%">Vaccinated</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </section>
</div>
<div class="modal" id="pform" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Health Declaration Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="#" enctype="multipart/form-data" id="health_dec_form">
                        <input type="hidden" name="pid" id="pid">
                        <input type="hidden" name="action" id="action" value="add">
                        <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                        <div class="row">
                            <div class="col">
                                <em>Fields indicated with <b class="text-danger">*</b> is required.</em>
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>

                                <div class="form-group">
                                    <label for="diagnose">Gender <span class="text-danger">*</span></label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" value="1" name="gender" id="genderm" required checked>
                                        <label for="genderm" class="form-check-label">Male</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" value="2" name="gender" id="genderf" required>
                                        <label for="genderf" class="form-check-label">Female</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="age">Age <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" min="0" name="age" id="age" required>
                                </div>

                                <div class="form-group">
                                    <label for="contact_no">Contact Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" pattern="\d*" name="contact_no" maxlength="11" id="contact_no" placeholder="Ex. 09123456789" required>
                                </div>

                                <div class="form-group">
                                    <label for="body_temp">Body Temperature <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" step="any" name="body_temp" id="body_temp" required>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="diagnose">COVID-19 Diagnose <span class="text-danger">*</span></label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" value="1" name="diagnose" id="diagnosed_yes" required>
                                            <label for="diagnosed_yes" class="form-check-label">Yes</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" value="0" name="diagnose" id="diagnosed_no" required checked>
                                            <label for="diagnosed_no" class="form-check-label">No</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="encounter">COVID-19 Encounter <span class="text-danger">*</span></label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" value="1" name="encounter" id="encounter_yes" required>
                                            <label for="encounter_yes" class="form-check-label">Yes</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" value="0" name="encounter" id="encounter_no" required checked>
                                            <label for="encounter_no" class="form-check-label">No</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="vacinated">COVID-19 Vaccinated <span class="text-danger">*</span></label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" value="1" name="vacinated" id="vacinated_yes" required checked>
                                            <label for="vacinated_yes" class="form-check-label">Yes</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" value="0" name="vacinated" id="vacinated_no" required>
                                            <label for="vacinated_no" class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nationality">Nationality <span class="text-danger">*</span></label>
                                    <select class="form-control select2" id="nationality" name="nationality" style="width: 100%;">

                                    </select>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" id="submit">Submit</button>
                                    <button type="reset" class="btn btn-danger" id="cancel">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
include_once '../footer.php';
?>