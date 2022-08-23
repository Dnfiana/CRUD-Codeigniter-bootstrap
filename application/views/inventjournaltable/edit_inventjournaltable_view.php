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
        <form action="<?php echo site_url('inventjournaltable/update');?>" method="post">
        <div class="form-group">
            <label>JOURNALID</label>
            <input class="form-control" type="text" name="JOURNALID" value="<?php echo
            $JOURNALID;?>" placeholder="JOURNALID">
          </div>
          <div class="form-group">
            <label>DESCRIPTION</label>
            <input class="form-control" type="text" name="DESCRIPTION" value="<?php echo
            $DESCRIPTION;?>" placeholder="DESCRIPTION">
          </div>
          <div class="form-group">
            <label>POSTED</label>
            <input class="form-control" type="text" name="POSTED" value="<?php echo
            $POSTED;?>" placeholder="POSTED">
          </div>
          <div class="form-group">
            <label>RESERVATION</label>
            <input class="form-control" type="text" name="RESERVATION" value="<?php echo
            $RESERVATION;?>" placeholder="RESERVATION">
          </div>
          <div class="form-group">
            <label>POSTEDDATETIME</label>
            <input class="form-control" type="text" name="POSTEDDATETIME" value="<?php echo
            $POSTEDDATETIME;?>" placeholder="POSTEDDATETIME">
          </div>
          <div class="form-group">
            <label>JOURNALNAMEID</label>
            <input class="form-control" type="text" name="JOURNALNAMEID" value="<?php echo
            $JOURNALNAMEID;?>" placeholder="JOURNALNAMEID">
          </div>
          <div class="form-group">
            <label>VOUCHERDRAW</label>
            <input class="form-control" type="text" name="VOUCHERDRAW" value="<?php echo
            $VOUCHERDRAW;?>" placeholder="VOUCHERDRAW">
          </div>
          <div class="form-group">
            <label>VOUCHERSEQID</label>
            <input class="form-control" type="text" name="VOUCHERSEQID" value="<?php echo
            $VOUCHERSEQID;?>" placeholder="VOUCHERSEQID">
          </div>
          <div class="form-group">
            <label>NUMOFLINES</label>
            <input class="form-control" type="text" name="NUMOFLINES" value="<?php echo
            $NUMOFLINES;?>" placeholder="NUMOFLINES">
          </div>
          <div class="form-group">
            <label>RECID</label>
            <input class="form-control" type="text" name="RECID" value="<?php echo
            $RECID;?>" placeholder="RECID">
          </div>
          <center>
          <input type="hidden" name="JOURNALID" value="<?php echo
            $JOURNALID;?>">
          <button class="btn btn-dark btn-block" type="submit">Submit</button>
          </center>        
        </form>
    </div>   

  </body>
</html>