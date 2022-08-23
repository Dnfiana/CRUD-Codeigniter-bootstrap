<html>
  <head>    
    <title>ADD DATA</title> 
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
    <div class="container">  
      <h1><center>ADD DATA</center></h1>
      <div >
        <form action="<?php echo site_url('vendinvoicepurchlink/save');?>" method="post">
          <div class="form-group">
            <label>INVOICEID</label>
            <input class="form-control" type="text" name="INVOICEID" placeholder="INVOICEID">
          </div>
          <div class="form-group">
            <label>INVOICEDATE</label>
            <input class="form-control" type="text" name="INVOICEDATE" placeholder="INVOICEDATE">
          </div>
          <div class="form-group">
            <label>PURCHID</label>
            <input class="form-control" type="text" name="PURCHID" placeholder="PURCHID">
          </div>
          <div class="form-group">
            <label>INVOICEACCOUNT</label>
            <input class="form-control" type="text" name="INVOICEACCOUNT" placeholder="INVOICEACCOUNT">
          </div>
          <div class="form-group">
            <label>PARMID</label>
            <input class="form-control" type="text" name="PARMID" placeholder="PARMID">
          </div>
          <div class="form-group">
            <label>INTERNALINVOICEID</label>
            <input class="form-control" type="text" name="INTERNALINVOICEID" placeholder="INTERNALINVOICEID">
          </div>
          <div class="form-group">
            <label>DATAAREAID</label>
            <input class="form-control" type="text" name="DATAAREAID" placeholder="DATAAREAID">
          </div>
          <div class="form-group">
            <label>RECVERSION</label>
            <input class="form-control" type="text" name="RECVERSION" placeholder="RECVERSION">
          </div>
          <div class="form-group">
            <label>RECID</label>
            <input class="form-control" type="text" name="RECID" placeholder="RECID">
          </div>
          <center>
          <button class="btn btn-dark btn-block" type="submit">Add Data</button>
          </center>
        </form>
    </div>   
  </body>
</html>