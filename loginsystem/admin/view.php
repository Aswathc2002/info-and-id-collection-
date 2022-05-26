<?php session_start();
include_once('../includes/config.php');
include "db_conn.php";
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>View | Registration and Login System </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<style>
td,th {
    padding: 5px 10px;border: 5px solid #990000; border-collapse: collapse
  }
</style>
    </head>
    <body >
   <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
            
<table  style="border: 5px solid #990000; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                             <th>EMAIL-ID</th>
                                  <th>CERTIFICATE</th>
                                  <th>CERTIFICATE</th>
                                        </tr>
                                    </thead>                                   
                                    <tbody>
                                              <?php $ret=mysqli_query($conn,"select * from images");
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $row['email'];?></td>
                                  <td ><a href="uploads/<?=$row['image_url']?>">View</a></td>                                                             <td><a href="uploads/<?=$row['image_url']?>" download>Download</td>
                              </tr>
                              <?php }?>
                                      
                                    </tbody>
                                </table>

             <?php include_once('../includes/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
