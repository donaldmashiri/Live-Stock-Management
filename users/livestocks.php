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
                        <h6 class="m-0 font-weight-bold text-white">All Your LiveStocks</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">LS#:</th>
                                <th scope="col">Type Of Live Stock</th>
                                <th scope="col">Names</th>
                                <th scope="col">Height</th>
                                <th scope="col">Age</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Condition</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date Added</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $sql = "SELECT * FROM livestocks WHERE user_id = '{$_SESSION['user_id']}' ORDER BY livestock_id DESC ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $livestock_id = $row["livestock_id"];
                                    $user_id = $row["user_id"];
                                    $names = $row["names"];
                                    $type = $row["type"];
                                    $description = $row["description"];
                                    $age = $row["age"];
                                    $gender = $row["gender"];
                                    $status = $row["status"];
                                    $conditions = $row["conditions"];
                                    $height = $row["height"];
                                    $color = $row["color"];
                                    $date_added = $row["date_added"];
                                    $status = $row["status"];


                            ?>
                            <tr>
                                <th scope="row"><?php echo $livestock_id ?></th>
                                <td><?php echo $type ?></td>
                                <td><?php echo $names ?></td>
                                <td><?php echo $height ?></td>
                                <td><?php echo $age ?></td>
                                <td class="font-weight-bold text-danger"><?php echo $gender ?></td>
                                <td><?php echo $conditions ?></td>
                                <td><?php echo $description ?></td>
                                <td><?php echo $date_added ?></td>
                                <td class="text-success font-weight-bold"><?php echo $status ?></td>
                                <td>
                                    <a href="view.php?view=<?php echo $livestock_id ?>" class="btn btn-primary btn-sm"> Diagnostics </a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                                    <?php
                                }
                            }else{
                                echo "<h1 class='alert alert-danger'>You Have no Livestocks</h1>";
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