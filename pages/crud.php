<?php
session_start();

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
                            <input type="hidden" class="form-control" value="<?= $_SESSION['csrf_token']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="">---- Please select your gender -----</option>
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" min="0" name="age" id="age">
                        </div>

                        <div class="form-group">
                            <label for="contact_no">Contact Number</label>
                            <input type="number" class="form-control" pattern="\d{3}" name="contact_no" id="contact_no">
                        </div>

                        <div class="form-group">
                            <label for="body_temp">Body Temperature</label>
                            <input type="number" class="form-control" min="0" name="body_temp" id="body_temp">
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="diagnose">COVID-19 Diagnose</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="diagnose" id="diagnosed_yes">
                                    <label for="diagnosed_yes" class="form-check-label">Yes</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="diagnose" id="diagnosed_no">
                                    <label for="diagnosed_no" class="form-check-label">No</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="encounter">COVID-19 Encounter</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="encounter" id="encounter_yes">
                                    <label for="encounter_yes" class="form-check-label">Yes</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="encounter" id="encounter_no">
                                    <label for="encounter_no" class="form-check-label">No</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="vacinated">Vacinated</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="vacinated" id="vacinated_yes">
                                    <label for="vacinated_yes" class="form-check-label">Yes</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="vacinated" id="vacinated_no">
                                    <label for="vacinated_no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control" name="nationality" id="nationality">
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