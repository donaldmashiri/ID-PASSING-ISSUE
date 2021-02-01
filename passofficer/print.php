<?php include('../includes/db.php'); ?>

<?php

    $id = $_GET['view'];
    $query = "SELECT * FROM passmgs JOIN users ON passmgs.user_id = users.user_id WHERE passmgs.pass_id = $id";

    $all_msgs = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_assoc($all_msgs)) {
        $user_id = $row['user_id'];
        $pass_id = $row['pass_id'];
        $message = $row['message'];
        $national_id = $row['national_id'];
        $user_image = $row['user_image'];
        $valid_area = $row['valid_area'];
        $period = $row['period'];
        $names = $row['names'];
        $branch = $row['branch'];
        $occupation = $row['occupation'];
        $admin_status = $row['admin_status'];
        $account_status = $row['account_status'];
    }  
     ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PassOfficer</title>

<link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body onload="window.print();">

<nav class="navbar navbar-expand-sm bg-white  navbar-dark fixed-top" id="main-nav">
    <div class="container">
      <a href="all_user.php" class="navbar-brand text-dark"> Civil Aviation Authority Of Zimbabwe 
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
    </div>
  </nav>

<!-- CREATE SECTION -->
<section id="share-head-section" class="bg-secondary mt-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col text-center py-2">
          <h6 class="text-dark text-center mt-1"> Civil Aviation Authority Of Zimbabwe </h6>
         
        </div>
      </div>
    </div>
  </section>
 <!-- SHARE HEAD -->

 <section id="share-head-section" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col  py-5">
        <body onload="window.print();">

        <div  class="container">
        <div class="row profile">
            <div class="col-md-8">
                <div class="profile-content">

                <div class="card">
                    <div class="card-header"> Authorization </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Names :</th>
                                        <th><?php echo $names; ?></th>
                                    </tr>
                                    <tr>
                                        <th>National ID :</th>
                                        <th><?php echo $national_id; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Occupation :</th>
                                        <th><?php echo $occupation; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Period of Validity :</th>
                                        <th><?php echo $period; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Valid for Areas :</th>
                                        <th><?php echo $valid_area; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Name of Airport :</th>
                                        <th><?php echo $branch; ?></th>
                                    </tr>
                                    </thead>
                                </table>

                            </div>
                            <div class="col-md-3">
                                <img src="../images/users/<?php echo $user_image?>" width="100" height="100" class="rounded" alt="" srcset="">
                            </div>
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
        <a href="home.php" class="btn btn-secondary btn-sm text-white">Home</a>
          <p>Touchmoney &copy;
            <span id="year"></span>
          </p>
         
        </div>
      </div>
    </div>
  </footer>
    
</body>
</html>