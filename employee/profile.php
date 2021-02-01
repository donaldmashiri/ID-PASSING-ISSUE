<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee/Client</title>

<link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
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
            <img src="../images/download.png" class="rounded" width="60" height="20" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<?php include('usernav.php'); ?>

 <!-- SHARE HEAD -->
 <section id="share-head-section" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col  py-5">
         
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
            <?php include('details.php');?>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <div class="card">
                        <div class="card-header">Your personal details</div>
                        <div class="card-body">
                                    <div class="mb-2 ng-binding">
                                         <span class="font-weight-bold text-dark">Employee ID(#) :</span>  CAAZ00<?php echo $user_id; ?>
                                    </div>
                                    <div class="mb-2 ng-binding">
                                         <span class="font-weight-bold text-dark">Names :</span>  <?php echo $names; ?>
                                    </div>
                                    <div class="mb-2 ng-binding">
                                         <span class="font-weight-bold text-dark">Employer :</span> <?php echo $employer; ?>
                                    </div>
                               
                                    <div class="mb-2 ng-binding">
                                         <span class="font-weight-bold text-dark">Email :</span> <?php echo $email; ?>
                                    </div>
                              
                                    <div class="mb-2 ng-binding">
                                         <span class="font-weight-bold text-dark">Occupation :</span> <?php echo $occupation; ?>
                                    </div>
                                    <div class="mb-2 ng-binding">
                                         <span class="font-weight-bold text-dark">Branch :</span> <?php echo $branch; ?>
                                    </div>
                                    <div class="mb-2 ng-binding">
                                         <span class="font-weight-bold text-dark">Employer:</span> <?php echo $employer; ?>
                                    </div>
                                    <div class="mb-2 ng-binding">
                                         <span class="font-weight-bold text-dark">Period of Validity:</span> <?php echo $period; ?>
                                    </div>
                                   
                                    <hr>
                        </div>
                    </div>
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