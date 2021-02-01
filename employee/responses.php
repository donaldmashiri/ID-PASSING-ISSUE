<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee/Clients</title>

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
                    <div class="card-header text-capitalize font-weight-bold">Your resposes from pass request</div>
                      

                    <?php

$query = "SELECT * FROM passmgs WHERE user_id = '{$_SESSION['user_id']}' ORDER BY pass_id DESC";
$select_user = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_user)) {

    $user_id = $row['user_id'];
    $pass_id = $row['pass_id'];

    $purpose = $row['purpose'];
    $message = $row['message'];
    $date = $row['date'];
    $admin_status = $row['admin_status'];
    $account_status = $row['account_status'];
    $issuing_status = $row['issuing_status'];
    $approval = $row['approval'];



?>
  <div class="card">
                    <div class="card-body"> 
                      <small class="text-info font-weight-bold">
                                <div class="mb-2 ng-binding">
                                     <span class="font-weight-bold text-dark">PASS NO. :</span>  PASS00<?php echo $pass_id; ?>
                                </div>
                                <div class="mb-2 ng-binding">
                                     <span class="font-weight-bold text-dark">Date :</span>  <?php echo $date; ?>
                                </div>
                                <div class="mb-2 ng-binding">
                                     <span class="font-weight-bold text-dark">Purpose(s) :</span>  <?php echo $purpose; ?>
                                </div>
                                <div class=" bg-light mb-2 ng-binding">
                                     <span class=" font-weight-bold text-dark">Message :</span>
                                     <?php echo $message; ?>
                                </div>
                                <div class="mb-2 ng-binding">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Approval#</th>
                                                <th>Adminstration</th>
                                                <th>Accounts</th>
                                                <th>Issuing Pass</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> CZ001<?php echo $pass_id; ?></td>
                                                <td>
                                                 <?php if ($admin_status === "approved") { echo "<p class='text-success'> $admin_status </p>";
                                                    } elseif($admin_status === "not yet approved"){echo "<p> $admin_status </p>";}
                                                     else { echo "<p class='text-danger'> $admin_status </p>"; }
                                                ?>
                                                 </td>
                                                <td>
                                                <?php if ($account_status === "paid") { echo "<p class='text-success'> $account_status </p>";
                                                    } elseif($account_status === "not yet approved"){echo "<p> $account_status </p>";}
                                                     else { echo "<p class='text-danger'> $account_status </p>"; }
                                                ?> 
                                                </td>
                                                <td>
                                                <?php if ($issuing_status === "printed") { echo "<p class='text-success'> $issuing_status </p>";
                                                    }elseif($issuing_status === "not yet approved"){echo "<p> $issuing_status </p>";} 
                                                    else { echo "<p class='text-danger'> $issuing_status </p>"; }
                                                ?>  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                   
                                </div>
                

                                <!-- <a href="#" class="btn btn-danger">
                                <i class="glyphicon glyphicon-print "></i>Print</a> -->
                          
                               
                    </div>
                </div>

                <?php }; ?>

<hr>

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