<?php
ob_start();

                if (isset($_POST['login'])){

                    $typelogin = $_POST['typelogin'];
                    if($typelogin === "employee"){
                     
                        header("Location: employee" );
                    
                    }else if($typelogin === "accounts"){

                        header("Location: accounts" );

                    }else if($typelogin === "passofficer"){

                        header("Location: passofficer" );
                        
                    }else if($typelogin === "admin"){

                        header("Location: admin" );
                        
                    }

                       
                }
                ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Passing Issue</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
   

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



<nav class="navbar navbar-expand-sm bg-white  navbar-dark fixed-top" id="main-nav">
    <div class="container">
      <a href="all_user.php" class="navbar-brand text-dark">Civil Aviation Authority Of Zimbabwe
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" class="nav-link">
            <img src="images/download.png" class="rounded" width="60" height="20" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



    <div class="container mt-5 px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="images/download.png" width="50" height="50" class="rounded-circle ml-3"> <p class="text-muted">Civil Aviation Authority Of Zimbabwe</p> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/logo.png" class="image"> </div>
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
                <div class="row px-3"> <label class="mb-1">
                   <div class="col-md-12">
                   <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Log in as</label>
                        </div>
                        <select class="custom-select" name="typelogin"  id="inputGroupSelect01">
                                  <option selected>Choose...</option>
                                  <option value="admin">Administrator</option>
                                  <option value="employee">Employee</option>
                                  <option value="accounts">Accounts</option>
                                  <option value="passofficer">Pass Officer</option>
                        </select>
                    </div> 
                    
                   </div>
                   <div class="col-md-6">
                    <button type="submit" name="login"  formtarget="_blank" class="btn btn-blue text-center">Login</button>
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
        <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
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