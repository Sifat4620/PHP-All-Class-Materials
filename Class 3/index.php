<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- db connection -->
        <?php include "db.php"?>
        <!-- db connection -->
    </head>
    <body class="sb-nav-fixed">
         
         <?php include "header.php"?>   
         <?php include "sidebar.php"?>
            <div id="layoutSidenav_content">
        <main>
        <!-- table -->
         <section> 
           <div class="container">
             <div class="row"> 
               <div class="col-md-12">
               <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                      
                      $sql = "SELECT * FROM students";
                      $readdb=mysqli_query($db,$sql);
                      $i=1;
                      while( $row = mysqli_fetch_assoc( $readdb) ){
                              $id     = $row['id'];
                              $name   = $row['name'];
                              $email  = $row['email'];
                              $address= $row['address']; 
                              ?>
                              <tr>
                              <th scope="row"><?php echo $i?></th>
                              <td><?php echo $name?>   </td>
                              <td><?php echo $email?>  </td>
                              <td><?php echo $address?></td>
                              <th scope="col">
                              <a href="update.php&uid=<?php echo $id?>"><button type="submit" class="btn btn-primary" name="edit">Update</button></a>
                              <a href=""><button type="submit" class="btn btn-danger" name="delate">Delate</button></a>
                              </th>
                              </tr>
                           
                          <?php            
                        $i++;
                      }

                      ?>
                       
                    </tbody>
                    </table>
               </div>
             </div>   
           </div>
         </section>
        <!-- table -->          
        </main>
                <?php include "footer.php"?>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
