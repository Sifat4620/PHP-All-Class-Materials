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
    <?php include "header.php"?>
    <body> 
        <section>
             <div class="container">
                <div class="row">
                <h1> Update table </h1> 

                    <?php 
                       if( isset( $_GET['uid'] ) ){
                         $uid    =$_GET['uid'];
                         $sql    = "SELECT * FROM students WHERE id='$uid'";
                         $readdb = mysqli_query($db,$sql);

                         while($row=mysqli_fetch_assoc($readdb)){
                                $id     = $row['id'];
                                $name   = $row['name'];
                                $email  = $row['email'];
                                $address= $row['address']; 
                    ?>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for=""  required>name</label>
                                <input type="text" class="form-control" placeholder="name" name="name" value="<?php echo $name ?>">
                                
                            </div>
                            <div class="form-group">
                                <label for="" >Email address</label>
                                <input type="email" class="form-control"  placeholder="name" name="email" value="<?php echo $email ?>"> 
                                
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" id="" placeholder="address" name="address" value="<?php echo $address ?>">
                            </div>
                        
                            <button type="submit" class="btn btn-primary" name="update_info">Save Change</button>
                        </form>
                    <?php
                         }

                        }
                    ?>   
                    <?php
                             
                             if(isset( $_POST["update_info"] ) ){
                               $name    = $_POST['name'];
                               $email   = $_POST['email'];
                               $pass    = $_POST['pass'];
                               $address = $_POST['address'];

                               $sql = "UPDATE students SET name ='$name' , email='$email', address='$address' WHERE  id='$uid'";

                               $updateStd = mysqli_query($db, $sql);

                               if($updateStd){
                                   header("location: index.php");
                               }
                               else{
                                   die("Opps !! some thing wrong".mysqli_error($db));
                               }
   
                               
                               }    
                            
                    ?>         

                
                </div>
             </div>
        </section>
        <?php include "footer.php"?>
    </body>
</html>
