<?php
include_once '../header.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- COVID-19 ENCOUNTER -->
                    <div class="small-box bg-info">
                        <div class="inner">
                        <h3 id="encounter">-</h3>

                        <p>COVID-19 ENCOUNTER</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-users"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer dbmore" data-title="COVID-19 Encounter"   data-type="encounter">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- VACCINATED -->
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3 id="vaccinated">-</h3>

                        <p>VACCINATED</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-syringe"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer dbmore" data-title="Vaccinated"   data-type="vaccinated">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- FEVER -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                        <h3 id="fever">-</h3>

                        <p>FEVER</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-thermometer-three-quarters"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer dbmore" data-title="Diagnose"   data-type="fever">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- ADULT -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                        <h3 id="adult">-</h3>

                        <p>ADULT</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-user-tie"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer dbmore" data-title="Adult"   data-type="adult">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- MINOR -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                        <h3 id="minor">-</h3>

                        <p>MINOR</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-user"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer dbmore" data-title="Minor"   data-type="minor">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- FOREIGNER -->
                    <div class="small-box bg-info">
                        <div class="inner">
                        <h3 id="foreigner">-</h3>

                        <p>FOREIGNER</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer dbmore" data-title="Foreigner"  data-type="foreigner">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- MALE -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                        <h3 id="male">-</h3>

                        <p>MALE</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-mars"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer dbmore" data-title="Male"  data-type="male">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- FEMALE -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                        <h3 id="female">-</h3>

                        <p>FEMALE</p>
                        </div>
                        <div class="icon">
                          <i class="fas fa-venus"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer dbmore" data-title="Female" data-type="female">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal" id="moreinfo" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">All <span id="modaltitle"></span> Patients Data | Total (<span id="totalpatient"></span>)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid" style="height: 30rem;">
                  <div id="jqgrid_tbl"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include_once '../footer.php';
?>