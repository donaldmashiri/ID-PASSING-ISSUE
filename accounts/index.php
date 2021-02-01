<?php
ob_start();

               
                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

</head>

<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-color: #B0BEC5;
        background-repeat: no-repeat
    }
    
    .card0 {
        box-shadow: 0px 4px 8px 0px #757575;
        border-radius: 0px
    }
    
    .card2 {
        margin: 0px 40px
    }
    
    .logo {
        width: 200px;
        height: 100px;
        margin-top: 20px;
        margin-left: 35px
    }
    
    .image {
        width: 360px;
        height: 280px
    }
    
    .border-line {
        border-right: 1px solid #EEEEEE
    }
    
    .facebook {
        background-color: #3b5998;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer
    }
    
    .twitter {
        background-color: #1DA1F2;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer
    }
    
    .linkedin {
        background-color: #2867B2;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer
    }
    
    .line {
        height: 1px;
        width: 45%;
        background-color: #E0E0E0;
        margin-top: 10px
    }
    
    .or {
        width: 10%;
        font-weight: bold
    }
    
    .text-sm {
        font-size: 14px !important
    }
    
     ::placeholder {
        color: #BDBDBD;
        opacity: 1;
        font-weight: 300
    }
    
     :-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }
    
     ::-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }
    
    input,
    textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px
    }
    
    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0
    }
    
    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }
    
    a {
        color: inherit;
        cursor: pointer
    }
    
    .btn-blue {
        background-color: #1A237E;
        width: 150px;
        color: #fff;
        border-radius: 2px
    }
    
    .btn-blue:hover {
        background-color: #000;
        cursor: pointer
    }
    
    .bg-blue {
        color: #fff;
        background-color: #1A237E
    }
    
    @media screen and (max-width: 991px) {
        .logo {
            margin-left: 0px
        }
        .image {
            width: 300px;
            height: 220px
        }
        .border-line {
            border-right: none
        }
        .card2 {
            border-top: 1px solid #EEEEEE !important;
            margin: 0px 15px
        }
    }
</style>

<body>

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
              
<div class="row">
<div class="card">
                    <div class="card-header font-weight-bold text-capitalize">Accounts </div>
                    <form action="" method="post">
                        <div class="card-body">
                             <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Accounts Email</h6>
                            </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid Accounts Email" minlength="4" required>
                         </div>
                <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Password</h6>
                            </label> <input type="password" name="password" placeholder="Enter password" minlength="4" required>
                         </div>
                
                    <div class="row mb-3 px-3"> <button type="submit" name="acclogin" class="btn btn-blue text-center">Login</button> </div>
                </form>
<?php 
 if (isset($_POST['acclogin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email === "accounts@gmail.com" && $password ==="12345"){
        header("Location: home.php" );
    }else{
        echo "<p class='text-danger'>invalid email and password</p>";
    }

   
}


?>
                
                    </div>
</div>
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