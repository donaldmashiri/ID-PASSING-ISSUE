<?php include_once('../includes/header.php');?>


<?php include_once('adminnav.php');?>

<!-- CREATE SECTION -->
  <section id="share-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
         
        <div class="card">
                <div class="card">
                <div class="card-header">Reports</div>
                    <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Type</th>
                            <th scope="col">image</th>
                            <th scope="col">names</th>
                            <th scope="col">national ID</th>
                            <th scope="col">branch</th>
                            <th scope="col">occupation</th>
                            <th scope="col">admin status</th>
                            <th scope="col">Accounts</th>
                            <th scope="col">Pass Officer</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php

$query = "SELECT  * FROM passmgs JOIN users ON passmgs.user_id = users.user_id ORDER BY passmgs.pass_id DESC";

$all_users = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($all_users)) {
    $user_id = $row['user_id'];
    $names = $row['names'];
    $type_user = $row['type_user'];
    $email = $row['email'];
    $user_image = $row['user_image'];
    $branch = $row['branch'];
    $occupation = $row['occupation'];
    $national_id = $row['national_id'];
    $admin_status = $row['admin_status'];
    $account_status = $row['account_status'];
    $issuing_status = $row['issuing_status'];



    ?>
    <tr>
        <td><?php echo $user_id; ?></td>
        <td><?php echo $type_user; ?></td>
        <td> <img src="../images/users/<?php echo $user_image; ?>"  width="50" height="50" class="">
            </td>
        <td><?php echo $names; ?></td>
        <td><?php echo $national_id; ?></td>
        <td><?php echo $occupation; ?></td>
        <td><?php echo $branch; ?></td>
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



<?php }; ?>

                           
                        </tbody>
                    </table>
                    </div>
                </div>
              
            </div>

        </div>
      </div>
    </div>
  </section>

  <?php include('../includes/footer.php'); ?>