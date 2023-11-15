<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <?php include "db.php"?>
    <title>Form</title>
</head>
<body>
         <?php include "header.php"?>  

           <section>
               <div class="container">
                   <div class="row">
                         <div class="col-md-12">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for=""  required>name</label>
                                <input type="text" class="form-control" placeholder="name" name="name">
                                
                            </div>
                            <div class="form-group">
                                <label for="" >Email address</label>
                                <input type="email" class="form-control"  placeholder="name" name="email" > 
                                
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="" placeholder="Password" name="pass">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" id="" placeholder="address" name="address" >
                            </div>
                        
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                            <?php
                             
                              if(isset( $_POST["submit"] ) ){
                                $name    = $_POST['name'];
                                $email   = $_POST['email'];
                                $pass    = $_POST['pass'];
                                $address = $_POST['address'];

                                $sql = "INSERT INTO students (name ,email ,pass ,address) VALUES ('$name', '$email', '$pass', '$address')";

                                $addStd = mysqli_query($db, $sql);

                                if($addStd){
                                    header("location: index.php");
                                }
                                else{
                                    die("Opps !! some thing wrong".mysqli_error($db));
                                }
    
                                
                                }    
                             
                            ?>

                         </div>
                   </div>
               </div>
           </section>

           <?php include "footer.php"?>
</body>
</html>