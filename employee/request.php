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
                    <div class="card-header text-capitalize font-weight-bold">Request for pass</div>
                    <div class="card-body">
                                <h6 class="font-weight-bold text-capitalize text-info">Apply for Pass at your current Airport :<?php echo $branch; ?></h6>
                                <form class="" action="" method="post">
                                    <div class="form-group m-1">
                                        <input type="text" name="purpose" class="form-control" placeholder="Enter purpose"  minlength="4" required>
                                    </div>
                                    <div class="form-group m-1">
                                        <textarea  name="message" class="form-control" placeholder="Enter Message" id="" cols="30" rows="10"  minlength="10" required></textarea>
                                    </div>
                                    <div class="form-group m-1">
                                        <input type="date"  name="date" class="form-control"  minlength="4" required>
                                    </div>
                                   <button type="submit" name="submit" class="btn btn-primary m-1" >submit</button> 
                                </form>
                    </div>
                </div>

                <?php 
                  if(isset($_POST['submit'])){

                    $purpose  = $_POST['purpose'];
                    $message  = $_POST['message'];
                    $date  = $_POST['date'];
                    $admin_status = false;
                    $account_status = false;
                    $issuing_status = false;
                   
                    echo $admin_status;
            
                    // INSERT INTO `passmgs`(`pass_id`, `user_id`, `purpose`, `message`, `date`, `admin_status`, `account_status`, `issuing_status`)

                    $query = "INSERT INTO passmgs(user_id, purpose, message, date) ";
                    $query.= "VALUES($user_id,'{$purpose}','{$message}','{$date}')";
                
                    $request_query = mysqli_query($connection, $query);
                
                    if(!$request_query){
                        die('QUERY FAILES' . mysqli_error($connection));
                    }
                
                    echo "<p class='alert alert-success mt-2 text-center'>Your request was successfully sent</p>";

                  }
                ?>

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