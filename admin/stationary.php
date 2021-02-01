<?php include_once('../includes/header.php');?>


<?php include_once('adminnav.php');?>

<!-- CREATE SECTION -->
  <section id="share-head-section" class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
         
        <div class="card">
        <div class="card-header">Add Stationary</div>
        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        
                            <div class="form-group">
                                <input type="number" class="form-control" name="cards" placeholder="No. of Cards" min="1" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="carts" placeholder="No. of Cartridge" min="1" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="ribbons" placeholder="No. of Ribons" min="1" required>
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit" name="add_stat">Submit</button>
                            </div>
                            </form>

                            <?php

if(isset($_POST['add_stat'])){
    $cards  = $_POST['cards'];
    $carts  = $_POST['carts'];
    $ribbons  = $_POST['ribbons'];
    
    $query = "INSERT INTO stationary(cards, carts, ribbons) ";
    $query.= "VALUES('{$cards}','{$carts}','{$ribbons}')";

    $add_cart_query = mysqli_query($connection, $query);

    if(!$add_cart_query){
        die('QUERY FAILES' . mysqli_error($connection));
    }

    echo "<p class='alert alert-success mt-2 text-center'>Stationary Successfully added</p>";
   
}

?>





                            </div>
              
            </div>

        </div>
      </div>
    </div>
  </section>

  <?php include('../includes/footer.php'); ?>