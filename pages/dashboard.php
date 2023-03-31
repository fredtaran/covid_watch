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
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
include_once '../footer.php';
?>