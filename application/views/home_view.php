<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
        <script src="<?= base_url() ?>assets/jquery/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" 
               href="<?php echo site_url('home'); ?>">Dwi Nurfiana
            </a>
        </nav>

        <br>
        <div class="container">
            <div class="jumbotron">
                <center>
                    <h1>Dwi Nurfiana </h1>
                    <p>
                        Ini adalah halaman web yang berisi project TAS mata kuliah web programming lanjut
                    </p>
                </center>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">                           
                            <h5 class="card-title">
                                <i class="fas fa-receipt"></i> Vendinvoicepurchlink</h5>
                            <p class="card-text">
                                Berisi halaman untuk mengelola data Vendinvoicepurchlink.
                            </p>
                            <a class="btn btn-primary"
                            href="<?php echo site_url('vendinvoicepurchlink'); ?>">
                            Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fas fa-receipt"></i> Inventdim</h5>
                            <p class="card-text">
                                Berisi halaman untuk mengelola data Inventdim.
                            </p>
                            <a class="btn btn-primary"
                            href="<?php echo site_url('inventdim'); ?>">
                            Detail</a>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fas fa-receipt"></i> Inventjournaltable</h5>
                            <p class="card-text">
                                Berisi halaman untuk mengelola data Inventjournaltable.
                            </p>
                            <a class="btn btn-primary"
                            href="<?php echo site_url('inventjournaltable'); ?>">
                            Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fas fa-receipt"></i> Dddoctorgrossfee</h5>
                            <p class="card-text">
                                Berisi halaman untuk mengelola data Dddoctorgrossfee.
                            </p>
                            <a class="btn btn-primary"
                            href="<?php echo site_url('dddoctorgrossfee'); ?>">
                            Detail</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </body>
</html>