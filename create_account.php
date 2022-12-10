<?php include ("includes/db.php")?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Livestock Management System</title>
    <link rel="icon" type="image/x-icon" href="img/live1.jpeg">

    <!-- Custom fonts for this template-->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: blue" class="">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="text-center">
                        <h3 style="color: black" class="font-weight-bolder text-center mt-1">
                        Livestock Management System</h3>
                        <img src="img/live1.jpeg" class="rounded" width="300" height="150"  alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-none d-lg-block">
                            <div class="p-3">
                                <div class="text-center">
                                    <p> Have an Account <a href="login.php">login</a></p>
                                    <h1 class="h4 text-gray-900">Are you a Farmer Or Livestock Manager Create Account</h1>
                                </div>

                                <?php

                                if(isset($_POST['user_account'])){
                                    $first_name = $conn -> real_escape_string($_POST['first_name']);
                                    $last_name = $conn -> real_escape_string($_POST['last_name']);
                                    $email = $conn -> real_escape_string($_POST['email']);
                                    $user_type = $conn -> real_escape_string($_POST['user_type']);
                                    $address = $conn -> real_escape_string($_POST['address']);
                                    $password = $conn -> real_escape_string($_POST['password']);
                                    $con_password = $conn -> real_escape_string($_POST['con_password']);

                                $sql = "SELECT * FROM users WHERE email = '$email'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    echo "<h4 style='background-color: lightcoral' class='alert alert-dark text-white         text-center'>The email already exists</h4>";
                                }else{
                                    if($password === $con_password){
                                        $sql = "INSERT INTO users (first_name, last_name, email, user_type, address, password, date_created)
                            VALUES ('{$first_name}','{$last_name}','{$email}','{$user_type}', '{$address}','{$password}',now())";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "<h4 style='background-color: green' class='alert text-white alert-success'>Your Account Was successfully created</h4>";
                                        }else {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        }
                                    }else{
                                        echo "<h4 style='background-color: red' class='alert alert-dark text-white text-center'>Password did not match</h4>";
                                    }
                                }
                                }

                                ?>

                                <form class="user" method="post">
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control form-control-user"
                                               id="MsuEmail" aria-describedby="emailHelp"
                                               placeholder="Enter First Name" minlength="4" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control form-control-user"
                                               id="MsuEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Last Name" minlength="4" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                               id="MsuEmail" aria-describedby="emailHelp"
                                               placeholder="Enter Email Address..." minlength="4" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="user_type" class="form-control" id="">
                                            <option value="">Select User type</option>
                                            <option value="live stock manager">Live Stock Manager</option>
                                            <option value="farmer">Farmer</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="address" id="" cols="5" rows="3" class="form-control form-control-user"
                                                  placeholder="Address" minlength="4" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="" placeholder="Password" minlength="4" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="con_password" class="form-control form-control-user"
                                               id="" placeholder="Confirm Password" minlength="4" required>
                                    </div>
                                    <button type="submit" name="user_account" class="btn btn-success btn-user btn-block">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>