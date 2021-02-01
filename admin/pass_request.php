<?php include_once('../includes/header.php');?>


<?php include_once('adminnav.php');?>

<!-- CREATE SECTION -->
  <section id="share-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
         
        <div class="card">
                <div class="card">
                <div class="card-header">Pass Request</div>
                <div class="card">
                <div class="card-header">Passing Issue Request</div>
                    <div class="card-body">
                        <div class="row">
                        <?php
$query = "SELECT * FROM passmgs JOIN users ON passmgs.user_id = users.user_id ORDER BY passmgs.pass_id DESC";

$all_msgs = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($all_msgs)) {
    $user_id = $row['user_id'];
    $pass_id = $row['pass_id'];
    $user_image = $row['user_image'];
    $message = $row['message'];
    $purpose = $row['purpose'];
    $branch = $row['branch'];
    $date = $row['date'];
    $names = $row['names'];
    $occupation = $row['occupation'];
    $admin_status = $row['admin_status'];
    $account_status = $row['account_status'];
    $issuing_status = $row['issuing_status'];

    ?>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <div class="card-header font-weight-bold">CAZ00<?php echo $user_id; ?></div>
                                        <div class="card-body">
                                        <div class="mb-2 ng-binding font-weight-bold ">
                                        <span class="text-dark">
                                            <img src="../images/users/<?php echo $user_image; ?>" width="50" height="50" class="rounded-circle" alt="" srcset=""></span>
                                            <?php echo $names; ?>
                                            <br>
                                              <small>(<?php echo $occupation; ?>)</small>
                                        </div>
                                        <hr>
                                            <div class="mb-2 ng-binding">
                                                <span class="font-weight-bold text-dark">Purpose :</span> <?php echo $purpose; ?> 
                                            </div>
                                            <div class="mb-2 ng-binding bg-light">
                                                <span class="font-weight-bold text-dark">Message :</span> <?php echo $message; ?> 
                                            </div>
                                            <small class="text-muted text-info">Date: <?php echo $date; ?></small> 
                                            <br>
                                            <small class="text-info font-weight-bold text-capitalize">Branch: <?php echo $branch; ?></small>
                                            <br>
                                            <small class="text-muted text-secondary">Pass No. : PASS00<?php echo $pass_id; ?></small>

                                            <div class="mb-2 ng-binding bg-light">
                                            <p>
                                                <?php
                                                        if ($admin_status === "not yet approved") {
                                                            echo "<p class='text-dark'> Status : $admin_status </p>";
                                                        } elseif ($admin_status === "approved") {
                                                            echo "<p class='text-success'> Status : $admin_status </p>";
                                                        } else {
                                                            echo "<p class='text-danger'> Status : $admin_status </p>";
                                                        }
                                                ?>
                                            </p>
                                                <a href="pass_request.php?action=approve&req_id=<?= $pass_id ?>" class="btn btn-success btn-sm">accept</a>
                                                <a href="pass_request.php?action=decline&req_id=<?= $pass_id ?>" class="btn btn-danger btn-sm"> reject </a>

                                            </div>

                                        </div>
                                </div>
                            </div>
                        <?php };?>

                        <?php
                     // APPROVE
                     if (isset($_GET['action']) && $_GET['action'] == "approve") {

                        $request_id = $_GET['req_id'];
                        $approve = "approved";

                        $query = "UPDATE passmgs SET ";
                        $query .= "admin_status  = '{$approve}' ";
                        $query .= "WHERE pass_id = {$request_id} ";

                        header("Location: pass_request.php");

                        $update_query = mysqli_query($connection, $query);
                        if (!$update_query) {
                           die("Query failed" . mysqli_error($connection));
                        }
                     };

                     if (isset($_GET['action']) && $_GET['action'] == "decline") {

                        // Declined
                        $request_id = $_GET['req_id'];
                        $declined = "declined";

                        $query = "UPDATE passmgs SET ";
                        $query .= "admin_status  = '{$declined}' ";
                        $query .= "WHERE pass_id = {$request_id} ";

                        header("Location: pass_request.php");

                        $update_query = mysqli_query($connection, $query);
                        if (!$update_query) {
                           die("Query failed" . mysqli_error($connection));
                        }
                     };

                     ?>
                        </div>
                    </div>
                </div>




                </div>
              
            </div>

        </div>
      </div>
    </div>
  </section>

  <?php include('../includes/footer.php'); ?>