<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PassOfficer</title>

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
          <h1 class="display-4 text-white mt-1">PASS OFFICER</h1>
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
                    <form class="form-inline" action="" method="post">
                                    <div class="form-group m-1">
                                        <input type="text"  name="search" class="form-control text-uppercase" placeholder="Enter PASS No:"  minlength="4" required>
                                    </div>
                                    <br>
                                   <button type="submit" name="submit" class="btn btn-primary m-1" >search</button>
                                </form>
                    </div>
                    <div class="card-body">
                           
                               

                               
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                        <th scope="col">emp#</th>
                                        <th scope="col">pass#</th>
                                        <th scope="col">image</th>
                                        <th scope="col">names</th>
                                        <th scope="col">branch</th>
                                        <th scope="col">date</th>
                                        <th scope="col">management status</th>
                                        <th scope="col">Accounts</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

if(isset($_POST['submit'])){

    $search = $_POST['search'];

    $rest = substr($search, -3);

        if (is_numeric($rest))
            $number = $rest + 0;
            else // Let the number be 0 if the string is not a number
            $number = 0;

    // echo $number;


    $query = "SELECT * FROM passmgs JOIN users ON passmgs.user_id = users.user_id WHERE passmgs.pass_id = $number";

    $all_msgs = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_assoc($all_msgs)) {
        $user_id = $row['user_id'];
        $pass_id = $row['pass_id'];
        $message = $row['message'];
        $user_image = $row['user_image'];
        $purpose = $row['purpose'];
        $date = $row['date'];
        $names = $row['names'];
        $branch = $row['branch'];
        $occupation = $row['occupation'];
        $admin_status = $row['admin_status'];
        $account_status = $row['account_status'];

        echo "<tr>";
        echo "<td>CAZ00$user_id</td>";
        echo "<td>PASS00$pass_id</td>";
        echo "<td><img src='../images/users/$user_image' width='50' height='30' class='rounded'></td>";
        echo "<td>$names</td>";
        echo "<td>$branch</td>";
        echo "<td>$date</td>";
   
     ?>

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
</tr>


<?php     
    }
   
    
};?>

                                    </tbody>
                                </table>
                                
                                <?php
                                 if($admin_status === 'approved'){
                                    echo "<a href='view.php?view=$pass_id' class='btn btn-primary'>View</a>";
                                }

                                ?>

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