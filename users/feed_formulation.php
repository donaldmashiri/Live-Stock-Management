<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-9">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Add Feed Formulations</h6>
                        <a class="btn btn-success justify-content-end" href="view_feed.php">View</a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <?php
                        if(isset($_POST['submit'])){

                            $nutrient = $conn -> real_escape_string($_POST['nutrient']);
                            $quantity = $conn -> real_escape_string($_POST['quantity']);
                            $formula = $conn -> real_escape_string($_POST['formula']);

                            $sql = "INSERT INTO feeds (user_id, nutrient, quantity, formula, date)
                                VALUES ({$_SESSION['user_id']},'{$nutrient}', {$quantity}, '{$formula}',now())";

                            if ($conn->query($sql) === TRUE) {

                                echo "<h4 class='alert alert-info'>Feed formulation successfully added</h4>";

                            }else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        }
                        ?>

                        <form class="font-weight-bolder" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Nutrient</label>
                                        <input type="text" name="nutrient" class="form-control" placeholder="Nutrient :" minlength="3" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Quantity</label>
                                        <input type="number" name="quantity" class="form-control" min="1" placeholder="Quantity :" minlength="4" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="title">Formula</label>
                                        <textarea class="form-control" name="formula" id="" cols="15" rows="5" minlength="4" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>