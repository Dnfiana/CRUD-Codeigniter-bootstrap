<html>
    
    <head>   
    <script src="<?= base_url() ?>assets/jquery/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
         
      </head>
      <body>
          <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" 
               href="<?php echo site_url('home'); ?>">Dwi Nurfiana
            </a>
            <button class="navbar-toggler" data-toggle="collapse" 
                    data-target="#collapsibleNavbar" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li>
                       <a class="nav-link" 
                           href="<?php echo site_url('vendinvoicepurchlink'); ?>">
                            Vendinvoicepurchlink
                        </a>
                    </li>
                    <li>
                       <a class="nav-link" 
                           href="<?php echo site_url('inventdim'); ?>">
                            Inventdim
                        </a>
                    </li> 
                    <li>
                       <a class="nav-link" 
                           href="<?php echo site_url('inventjournaltable'); ?>">
                            Inventjournaltable
                        </a>
                    </li> 
                    <li>
                        <a class="nav-link" 
                           href="<?php echo site_url('dddoctorgrossfee'); ?>">
                           Dddoctorgrossfee
                        </a>
                    </li>   
                </ul> 
                <form class="form-inline my-2 my-lg-O" action="index.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
                    <input class="btn btn-primary my-2 my-sm-O" type="submit"> 
                </form>               
            </div> 
        </nav>
       <p><b>Klik Ok Untuk Menghapus <?php echo $INVOICEID?></b></p>
      <form action="<?php echo site_url('vendinvoicepurchlink/delete/' . $INVOICEID);?>">
         <button class="btn btn-dark" type="submit">OK</button>
      </form>
      


    </body>
</html>