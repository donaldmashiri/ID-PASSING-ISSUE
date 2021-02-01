
<?php include('../includes/header.php'); ?>  


<div class="container mt-5 px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                    <div class="row"> <img src="../images/download.png" width="50" height="50" class="rounded-circle ml-3"> <p class="text-muted">Civil Aviation Authority Of Zimbabwe</p> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="../images/logo.png" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <h4 class="mb-0 mr-4 mt-2 font-weight-bold text-uppercase"> ID PASS ISSUING SYSTEM</h4>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div> <small class="or text-center">Login</small>
                            <div class="line"></div>
                        </div>


                <form action="" method="post">
                <div class="row">
<div class="card">
                    <div class="card-header font-weight-bold text-capitalize">Eployee / client </div>
                        <div class="card-body">
                    <form action="" method="post">
                                    <div class="row px-3"> <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Email :</h6>
                                    </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"  minlength="4" required>
                                </div>
                        <div class="row px-3"> <label class="mb-1">
                                        <h6 class="mb-0 text-sm">Password</h6>
                                    </label> <input type="password" name="password" placeholder="Enter password"  minlength="4" required>
                                </div>
                            <div class="row mb-3 px-3"> <button type="submit" name="userlogin"  class="btn btn-blue text-center">Login</button> </div>
                     </form>

                     <?php

if (isset($_POST['userlogin'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from users where email = '$email' and password = '$password'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);


    if ($count == 1) {
        $_SESSION['user_id'] = $row['user_id'];
        header('location:profile.php');
//                            echo   $_SESSION['company_id'];
    } else {
        echo "<a class='bg-light nav-link text-danger'>Invalid email and password</a>";
    }

        // header("Location: employee" );
}
?>
                
                    </div>
</div>
</div>
                </form>

              

              
<div class="row">
        <form action="" method="post">
                    
        </form>
</div>
         

               
            </div>
        </div>
    </div>

    <div class="bg-blue py-4">
        <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</small>
            <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span>
                <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm">
                        </span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> 
            </div>
        </div>
    </div>
    </div>
    </div>







    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>


</body>

</html>
  