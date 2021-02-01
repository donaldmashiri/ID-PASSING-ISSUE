<?php include_once('../includes/header.php');?>


<?php include_once('adminnav.php');?>

<!-- CREATE SECTION -->
  <section id="share-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
         
        <div class="card">
                <div class="card">
                <div class="card-header">Employees</div>
                    <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Type</th>
                            <th scope="col">image</th>
                            <th scope="col">names</th>
                            <th scope="col">email</th>
                            <th scope="col">branch</th>
                            <th scope="col">occupation</th>
                            <th scope="col">National_ID</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

$query = "SELECT * FROM users ORDER BY user_id DESC";

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
    $address = $row['address'];
    $contact = $row['contact'];


    ?>
    <tr>
        <td><?php echo $user_id; ?></td>
        <td><?php echo $type_user; ?></td>
        <td> <img src="../images/users/<?php echo $user_image; ?>"  width="50" height="50" class="">
            </td>
        <td><?php echo $names; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $branch; ?></td>
        <td><?php echo $occupation; ?></td>
        <td><?php echo $national_id; ?></td>
    
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