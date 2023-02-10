<?php 
session_start();
?>
<?php
    if(isset($_POST['event']))
    {
        $_SESSION['event']=$_POST['event'];
    }
    else{
        echo 'alert("Session is not started")';
    }
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RGMCET Ripple 2K23</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<?php include "header.php"?>
<body>
<div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        
                        <div class="card">
                            <div class="card-body p-4">
                                <h3 class="auth-title" style="text-align:center"><?php echo $_SESSION['event']." Registration"; ?></h3>
                                <hr/>
                                <form action="../backend/dbregister.php" method="post">
                                    
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Firstname</label>
                                            <input class="form-control" type="text" id="emailaddress" name="fname" placeholder="Enter your Firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Lastname</label>
                                            <input class="form-control" type="text" id="emailaddress" name="lname" placeholder="Enter your Lastname" required>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                        <label for="Gender">Gender</label>
                                        <select class="form-control" name="gender" required>
                                                <option selected="" disabled="">--Select--</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                                
                                               
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Email</label>
                                            <input class="form-control" type="email" id="emailaddress" name="email" placeholder="Enter your Email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Phone</label>
                                            <input class="form-control" type="text" id="emailaddress" name="phone" placeholder="Enter your Phone" required>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">College Id</label>
                                            <input class="form-control" type="text" id="emailaddress" name="collegeid" placeholder="Enter your college Id" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">College Name</label>
                                            <input class="form-control" type="text" id="emailaddress" name="collegename" placeholder="Enter your College Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Year</label>
                                            <select class="form-control" name="year" required>
                                                <option selected="" disabled="">--Select year--</option>
                                                <option value="I">I</option>
                                                <option value="II">II</option>
                                                <option value="III">III</option>
                                                <option value="IV">IV</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Branch</label>
                                            <select class="form-control" name="dept" required>
                                                <option selected="" disabled="">--Select Branch--</option>
                                                <option value="cse">CSE</option>
                                                <option value="cse-ds">CSE-DS</option>
                                                <option value="cse-bs">CSE-BS</option>
                                                <option value="cse-bs">CSE-AI/ML</option>
                                                <option value="cse-bs">CSE-CS</option>
                                                <option value="ece">ECE</option>
                                                <option value="eee">EEE</option>
                                                <option value="civil">CIVIL</option>
                                                <option value="mech">MECH</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="hidden" value="<?php echo $_SESSION['event']; ?>" name="event" checked>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-danger btn-block" type="submit" name="submit"> Register </button>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
<?php include "footer.php"?>
</body>
</html>