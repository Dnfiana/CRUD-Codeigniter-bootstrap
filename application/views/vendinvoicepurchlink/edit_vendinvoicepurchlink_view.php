<html>
  <head>    
    <title>EDIT DATA</title> 
    <script src="<?= base_url() ?>assets/jquery/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css"> 
  </head>
  <body> 
  <html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.css">
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.js"></script>

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


    </body>
</html>    
      <h1><center>EDIT DATA</center></h1>
      <div class="container">
        <form action="<?php echo site_url('vendinvoicepurchlink/update');?>" method="post">
        <div class="form-group">
            <label>INVOICEID</label>
            <input class="form-control" type="text" name="INVOICEID" value="<?php echo
            $INVOICEID;?>" placeholder="INVOICEID">
          </div>
          <div class="form-group">
            <label>INVOICEDATE</label>
            <input class="form-control" type="text" name="INVOICEDATE" value="<?php echo
            $INVOICEDATE;?>" placeholder="INVOICEDATE">
          </div>
          <div class="form-group">
            <label>PURCHID</label>
            <input class="form-control" type="text" name="PURCHID" value="<?php echo
            $PURCHID;?>" placeholder="PURCHID">
          </div>
          <div class="form-group">
            <label>INVOICEACCOUNT</label>
            <input class="form-control" type="text" name="INVOICEACCOUNT" value="<?php echo
            $INVOICEACCOUNT;?>" placeholder="INVOICEACCOUNT">
          </div>
          <div class="form-group">
            <label>PARMID</label>
            <input class="form-control" type="text" name="PARMID" value="<?php echo
            $PARMID;?>" placeholder="PARMID">
          </div>
          <div class="form-group">
            <label>INTERNALINVOICEID</label>
            <input class="form-control" type="text" name="INTERNALINVOICEID" value="<?php echo
            $INTERNALINVOICEID;?>" placeholder="INTERNALINVOICEID">
          </div>
          <div class="form-group">
            <label>DATAAREAID</label>
            <input class="form-control" type="text" name="DATAAREAID" value="<?php echo
            $DATAAREAID;?>" placeholder="DATAAREAID">
          </div>
          <div class="form-group">
            <label>RECVERSION</label>
            <input class="form-control" type="text" name="RECVERSION" value="<?php echo
            $RECVERSION;?>" placeholder="RECVERSION">
          </div>
          <div class="form-group">
            <label>RECID</label>
            <input class="form-control" type="text" name="RECID" value="<?php echo
            $RECID;?>" placeholder="RECID">
          </div>
          <center>
          <input type="hidden" name="INVOICEID" value="<?php echo
            $INVOICEID;?>">
          <button class="btn btn-dark btn-block" type="submit">Submit</button>
          </center>        
        </form>
    </div>   

  </body>
</html>