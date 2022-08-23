<html>
  <head>    
    <title>ADD DATA</title> 
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
    <div class="container">  
      <h1><center>ADD DATA</center></h1>
      <div >
        <form action="<?php echo site_url('dddoctorgrossfee/save');?>" method="post">
          <div class="form-group">
            <label>RECID</label>
            <input class="form-control" type="text" name="RECID" placeholder="RECID">
          </div>
          <div class="form-group">
            <label>ACCOUNT</label>
            <input class="form-control" type="text" name="ACCOUNT" placeholder="ACCOUNT">
          </div>
          <div class="form-group">
            <label>ACCOUNTNAME</label>
            <input class="form-control" type="text" name="ACCOUNTNAME" placeholder="ACCOUNTNAME">
          </div>
          <div class="form-group">
            <label>DDBILLNO</label>
            <input class="form-control" type="text" name="DDBILLNO" placeholder="DDBILLNO">
          </div>
          <div class="form-group">
            <label>DDBILLDATE</label>
            <input class="form-control" type="text" name="DDBILLDATE" placeholder="DDBILLDATE">
          </div>
          <div class="form-group">
            <label>LINEAMOUNT</label>
            <input class="form-control" type="text" name="LINEAMOUNT" placeholder="LINEAMOUNT">
          </div>
          <div class="form-group">
            <label>DDDOCTORPCT</label>
            <input class="form-control" type="text" name="DDDOCTORPCT" placeholder="DDDOCTORPCT">
          </div>
          <div class="form-group">
            <label>DDORDERITEMID</label>
            <input class="form-control" type="text" name="DDORDERITEMID" placeholder="DDORDERITEMID">
          </div>
          <div class="form-group">
            <label>DDORDERITEMCODE</label>
            <input class="form-control" type="text" name="DDORDERITEMCODE" placeholder="DDORDERITEMCODE">
          </div>
          <div class="form-group">
            <label>DDMRNO</label>
            <input class="form-control" type="text" name="DDMRNO" placeholder="DDMRNO">
          </div>
          <center>
          <button class="btn btn-dark btn-block" type="submit">Add Data</button>
          </center>
        </form>
    </div>   

  </body>
</html>