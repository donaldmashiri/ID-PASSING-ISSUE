<?php

$query = "SELECT * FROM users WHERE user_id = '{$_SESSION['user_id']}'";
$select_user = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_user)) {

    $user_id = $row['user_id'];
    $names = $row['names'];
    $occupation = $row['occupation'];
    $email = $row['email'];
    $branch = $row['branch'];
    $national_id = $row['national_id'];
    $user_type = $row['user_type'];
    $period = $row['period'];
    $employer = $row['employer'];
    $user_image = $row['user_image'];
    

}

?>

<div class="profile-sidebar">
               <!-- SIDEBAR USERPIC -->
               <div class="profile-userpic">
                        <img src="../images/users/<?php echo $user_image; ?>" width="100" height="80" class="img-responsive rounded-circle" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                        <small class="text-muted"> <?php echo "ID# : CAAZ00". $user_id; ?></small>
                        <br>
                            <?php echo $names; ?>
                          
                            
                            <?php //echo "CAZ00". $user_id ." ". $fullnames; ?>
                        </div>
                        <div class="profile-usertitle-job text-info">
                        <?php echo $occupation; ?>
                        </div>
                    
                    </div>
                    <hr>
                  
                    <div class="profile-userbuttons">
                    <a href="index.php" class="btn btn-danger btn-block btn-sm">
                        <i class="fas fa-plus"></i>Logout
                        </a>
                    </div>
                
                   
                 
 </div>