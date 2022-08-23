<html>
    <head>
		<title>DATA</title>
        <script src="<?= base_url() ?>assets/jquery/jquery-3.6.0.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">

        <style>
            h1 {
                margin-top:20px;
            }
            table{
                padding:10px;
                text-align:center;
                margin-top:30px;
                border:2px solid;
            }

            </style>
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
            <form class="form-inline my-2 my-lg-O" method='post' action="<?= base_url() ?>index.php/inventjournaltable/index" >
                <input class="form-control mr-sm-2 " type='text' name="search" placeholder="Search" value='<?= $search ?>'><input class="btn btn-primary my-2 my-sm-O" type='submit' name='submit' value='Submit'>
            </form>              
            </div> 
        </nav>

        <div class="container">    
            <h1><center>DATA </center></h1> 
            <a href="<?php echo site_url('inventjournaltable/add_new');?>"class="btn btn-primary">Add Data</a><br/><br/>            
            <table class="table table-hover">
                <thead>
                <tr>
                        <th>JOURNALID</th>
                        <th>DESCRIPTION</th>
                        <th>POSTED</th>
                        <th>RESERVATION</th>
                        <th>POSTEDDATETIME</th>
                        <th>JOURNALNAMEID</th>
                        <th>VOUCHERDRAW</th>
                        <th>VOUCHERSEQID</th>
                        <th>NUMOFLINES</th>
                        <th>RECID</th>
                        <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 0;
                    foreach ($inventjournaltable->result() as $row) :
                        $count++;
                    ?>
                <tr>
                    <td><?php echo $row->JOURNALID;?></td>
                    <td><?php echo $row->DESCRIPTION;?></td>
                    <td><?php echo $row->POSTED;?></td>
                    <td><?php echo $row->RESERVATION;?></td>
                    <td><?php echo $row->POSTEDDATETIME;?></td>
                    <td><?php echo $row->JOURNALNAMEID;?></td>
                    <td><?php echo $row->VOUCHERDRAW;?></td>
                    <td><?php echo $row->VOUCHERSEQID;?></td>
                    <td><?php echo $row->NUMOFLINES;?></td>
                    <td><?php echo $row->RECID;?></td>
                    <td>
                        <a href="<?php echo site_url('inventjournaltable/get_edit/'.$row->JOURNALID);?>"><button type="button" class="btn btn-light">Update</button></a>
                        <a href="<?php echo site_url('inventjournaltable/get_delete/'.$row->JOURNALID);?>"><button type="button" class="btn btn-dark">Delete</button></a>
                    <td>
                </tr>
                <?php 
                 $count++;
                endforeach;?>
                </tbody>
            </table>
             <!-- Paginate -->
             <div >
                <?= $pagination; ?>
            </div>        
    </body>
</html>