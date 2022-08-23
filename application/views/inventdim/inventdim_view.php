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
            <form class="form-inline my-2 my-lg-O" method='post' action="<?= base_url() ?>index.php/inventdim/index" >
                <input class="form-control mr-sm-2 " type='text' name="search" placeholder="Search" value='<?= $search ?>'><input class="btn btn-primary my-2 my-sm-O" type='submit' name='submit' value='Submit'>
            </form>              
            </div> 
        </nav>

        <div class="container">    
            <h1><center>DATA </center></h1> 
            <a href="<?php echo site_url('inventdim/add_new');?>"class="btn btn-primary">Add Data</a><br/><br/>            
            <table class="table table-hover">
                <thead>
                <tr>
                        <th>INVENTDIMID</th>
                        <th>INVENTBATCHID</th>
                        <th>INVENTLOCATIONID</th>
                        <th>INVENTSITEID</th>
                        <th>DATAAREAID</th>
                        <th>RECVERSION</th>
                        <th>RECID</th>
                        <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 0;
                    foreach ($inventdim->result() as $row) :
                        $count++;
                    ?>
                <tr>
                    <td><?php echo $row->INVENTDIMID;?></td>
                    <td><?php echo $row->INVENTBATCHID;?></td>
                    <td><?php echo $row->INVENTLOCATIONID;?></td>
                    <td><?php echo $row->INVENTSITEID;?></td>
                    <td><?php echo $row->DATAAREAID;?></td>
                    <td><?php echo $row->RECVERSION;?></td>
                    <td><?php echo $row->RECID;?></td>
                    <td>
                        <a href="<?php echo site_url('inventdim/get_edit/'.$row->INVENTDIMID);?>"><button type="button" class="btn btn-light">Update</button></a>
                        <a href="<?php echo site_url('inventdim/get_delete/'.$row->INVENTDIMID);?>"><button type="button" class="btn btn-dark">Delete</button></a>
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