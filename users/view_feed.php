<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-112 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">All Feed Formulation</h6>
                        <a class="btn btn-success justify-content-end" href="feed_formulation.php">Back</a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">FF0#:</th>
                                <th scope="col">Nutrient</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Formula</th>
                                <th scope="col">date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $sql = "SELECT * FROM feeds WHERE user_id = '{$_SESSION['user_id']}' ORDER BY feed_id DESC ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $feed_id = $row["feed_id"];
                                    $user_id = $row["user_id"];
                                    $nutrient = $row["nutrient"];
                                    $quantity = $row["quantity"];
                                    $formula = $row["formula"];
                                    $date = $row["date"];


                            ?>
                            <tr>
                                <th scope="row"><?php echo $feed_id ?></th>
                                <td><?php echo $nutrient ?></td>
                                <td><?php echo $quantity ?></td>
                                <td><?php echo $formula ?></td>
                                <td><?php echo $date ?></td>
                            </tr>
                                    <?php
                                }
                            }else{
                                echo "<h1 class='alert alert-danger'>Nothing added yet</h1>";
                            }
                                    ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>