
<?php include_once('../includes/header.php');?>


<?php include_once('adminnav.php');?>

<!-- CREATE SECTION -->
<section id="share-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col  py-5">
         
            <div class="card">
                <div class="card-header">Add Employee / Client</div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                <select name="type_user" class="form-control" id="">
                                    <option value="employee">choose type</option>
                                    <option value="employee">employee</option>
                                    <option value="client">client</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="names" placeholder="Names" minlength="4" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" minlength="4" required>
                            </div>
                            <div class="form-group">
                            <label for="">Upload Image</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="occupation" placeholder="Occupation" minlength="4" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="employer" placeholder="Employer" minlength="4" required>
                            </div>
                            <div class="form-group">
                            <label for="">Period for Validity </label>
                                <input type="date" class="form-control" name="period" placeholder="period" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="national_id" placeholder="National Identity">
                            </div>
                            <div class="form-group">
                                <select name="valid_areas" class="form-control" id="">
                                    <option value="RGM-1">RGM-1</option>
                                    <option value="RGM-2">RGM-2</option>
                                    <option value="VFA-1">VFA-1</option>
                                    <option value="VFA-2">VFA-2</option>
                                    <option value="CPA-1">CPA-1</option>
                                    <option value="CPA-2">CPA-2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="branch" class="form-control" id="">
                                    <option value="vicfalls">Vicfalls Airport</option>
                                    <option value="Robert Gabriel Mugabe International">Robert Gabriel Mugabe International Airport</option>
                                    <option value="Charles Prince">Charles Prince Airport</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="password" minlength="4" required>
                            </div>

                            <div>
                                <button class="btn btn-primary" name="adduser">Save</button>
                            </div>
                            </form>

                            <?php

if(isset($_POST['adduser'])){
    $names  = $_POST['names'];
    $type_user  = $_POST['type_user'];
    $email  = $_POST['email'];
    $branch  = $_POST['branch'];
    $occupation  = $_POST['occupation'];
    $employer  = $_POST['employer'];
    $period  = $_POST['period'];
    $valid_areas  = $_POST['valid_areas'];
    $national_id  = $_POST['national_id'];
    $password  = $_POST['password'];

    $user_image = $_FILES['image']['name'];
    $user_image_temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($user_image_temp, "../images/users/$user_image");

    // echo $user_image;

    $query = "INSERT INTO users(type_user, names, email, branch, valid_area, occupation, employer,  period, national_id, password, user_image) ";
    $query.= "VALUES('{$type_user}','{$names}','{$email}','{$branch}','{$valid_areas}','{$occupation}','{$employer}','{$period}','{$national_id}','{$password}','{$user_image}')";

    $add_user_query = mysqli_query($connection, $query);

    if(!$add_user_query){
        die('QUERY FAILES' . mysqli_error($connection));
    }

    echo "<p class='alert alert-success mt-2 text-center'>Employee Successfully added</p>";
   
}

?>
                        
                

  
                    
                    </div>
            </div>
        </div>
      </div>
    </div>
  </section>


<?php include('../includes/footer.php'); ?>