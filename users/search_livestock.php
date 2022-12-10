<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="row">


            <!-- Area Chart -->
            <div class="col-xl-7 col-lg-9">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Search for Specific Livestock </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Search by <small>(name or type)</small></label>
                                <input type="text" name="search" class="form-control" placeholder="Search by name or type">
                            </div>
                            <button name="submit" class="btn btn-primary float-right mb-5">Search <i class="fa fa-search"></i></button>
                        </form>

                        <hr>
                        <br>

                        <?php
                        if(isset($_POST['submit'])) {

                            $search = strtoupper($_POST['search']);

                            $query = "SELECT * FROM livestocks WHERE user_id = '{$_SESSION['user_id']}'AND type LIKE '%{$search}%' OR names LIKE '%{$search}%'";

                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            $count = mysqli_num_rows($result);

                            if ($count >= 1) {
                                $livestock_id = $row["livestock_id"];
                                $user_id = $row["user_id"];
                                $names = $row["names"];
                                $type = $row["type"];
                                $description = $row["description"];
                                $age = $row["age"];
                                $status = $row["status"];
                                $conditions = $row["conditions"];
                                $height = $row["height"];
                                $color = $row["color"];
                                $date_added = $row["date_added"];
                                $status = $row["status"];

                                echo "<ul class='list-group '>
                                  <li class='list-group-item bg-success text-white'>LiveStock is found</li> 
                                  <li class='list-group-item'>Type :</span>  $type </li> 
                                  <li class='list-group-item'>Name :</span>  $names </li>
                                  <li class='list-group-item'>Age :</span>  $age </li>
                                  <a href='view.php?view=$livestock_id' class='btn btn-info'>view more</a> 
                                  </ul>";


                            } else {
                                echo "<ul class='list-group '>
                  <li class='list-group-item bg-danger text-white'>LiveStock is  not found</li> 
               </ul>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>