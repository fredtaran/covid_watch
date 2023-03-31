<?php
include_once '../header.php';

// Generate CSRF Token
$_SESSION['csrf_token'] = password_hash(random_bytes(60), PASSWORD_BCRYPT);


?>

<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header text-center bg-success">
            <h1 class="font-weight-bold">Health Declaration Form</h1>
        </div>

        <div class="card-body">
            <form action="#" enctype="multipart/form-data" class="mt-5" id="health_dec_form">

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <em>Fields indicated with <b class="text-danger">*</b> is required.</em>

                        <!-- Add CSRF Token to the FORM -->
                        <div class="form-group">
                            <input type="hidden" class="form-control" value="<?= $_SESSION['csrf_token']; ?>" name="csrf_token">
                        </div>

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
                                <label for="vacinated">Vacinated <span class="text-danger">*</span></label>
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
<?php 
include_once '../footer.php';
?>