<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>

<link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-white  navbar-dark fixed-top" id="main-nav">
    <div class="container">
      <a href="all_user.php" class="navbar-brand text-dark"> Civil Aviation Authority Of Zimbabwe 
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#home" class="nav-link">
            <img src="../images/download.png" class="rounded" width="60" height="20" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<!-- CREATE SECTION -->
<section id="share-head-section" class="bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4 text-white mt-1">Accounts</h1>
          <a href="index.php" class="btn btn-danger text-white">Logout</a>
        </div>
      </div>
    </div>
  </section>
 <!-- SHARE HEAD -->
 <section id="share-head-section" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col  py-5">
         
    <div class="container">
        <div class="row profile">
            <div class="col-md-12">
                <div class="profile-content">

                <div class="card">
                    <div class="card-header">
                    <a href="home.php" class="btn btn-primary text-white">Home</a>
                    </div>
                    <div class="card-body">

                        <h3 class="alert alert-success">Payment successfully approved
                        </h3>

                    <div>
                              
                    
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </div>
 
  </section>


  <!-- FOOTER -->
  <footer id="main-footer" class="bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-2">
        
          <p>Touchmoney &copy;
            <span id="year"></span>
          </p>
         
        </div>
      </div>
    </div>
  </footer>
    
</body>
</html>