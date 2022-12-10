<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Reports</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-header"><h4 class="font-weight-bolder text-success">Total LiveStocks</h4></div>
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                    $query = "SELECT count(*) FROM livestocks WHERE user_id = '{$_SESSION['user_id']}'";
                                                    $result = mysqli_query($conn, $query);
                                                    $row = mysqli_fetch_array($result);
                                                    echo $total_savings = $row[0];
                                                    ?> LiveStocks
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-header"><h4 class="font-weight-bolder text-success">Gender Type</h4></div>
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Female : <?php
                                                    $query = "SELECT count(*) FROM livestocks WHERE user_id = '{$_SESSION['user_id']}' And gender = 'female' ";
                                                    $result = mysqli_query($conn, $query);
                                                    $row = mysqli_fetch_array($result);
                                                    echo $total_savings = $row[0];
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Male : <?php
                                                    $query = "SELECT count(*) FROM livestocks WHERE user_id = '{$_SESSION['user_id']}' AND gender = 'male'";
                                                    $result = mysqli_query($conn, $query);
                                                    $row = mysqli_fetch_array($result);
                                                    echo $total_savings = $row[0];
                                                    ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-12 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-header"><h4 class="font-weight-bolder text-success"></h4></div>
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Cattle</th>
                                                            <th scope="col">Sheeps</th>
                                                            <th scope="col">Goats</th>
                                                            <th scope="col">Pigs</th>
                                                            <th scope="col">Horses</th>
                                                            <th scope="col">Donkeys</th>
                                                            <th scope="col">Mules</th>
                                                            <th scope="col">Hens</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th>
                                                                <?php $query = "SELECT count(*) FROM livestocks WHERE user_id = '{$_SESSION['user_id']}' AND type = 'cows'";
                                                                $result = mysqli_query($conn, $query);
                                                                $row = mysqli_fetch_array($result);
                                                                echo $total_count = $row[0]; ?>
                                                            </th>
                                                            <th>
                                                                <?php $query = "SELECT count(*) FROM livestocks WHERE  user_id = '{$_SESSION['user_id']}' AND type = 'sheeps'";
                                                                $result = mysqli_query($conn, $query);
                                                                $row = mysqli_fetch_array($result);
                                                                echo $total_count = $row[0]; ?>
                                                            </th>
                                                            <th>
                                                                <?php $query = "SELECT count(*) FROM livestocks WHERE  user_id = '{$_SESSION['user_id']}' AND type = 'goats'";
                                                                $result = mysqli_query($conn, $query);
                                                                $row = mysqli_fetch_array($result);
                                                                echo $total_count = $row[0]; ?>
                                                            </th>
                                                            <th>
                                                                <?php $query = "SELECT count(*) FROM livestocks WHERE  user_id = '{$_SESSION['user_id']}' AND type = 'pigs' ";
                                                                $result = mysqli_query($conn, $query);
                                                                $row = mysqli_fetch_array($result);
                                                                echo $total_count = $row[0]; ?>
                                                            </th>
                                                            <th>
                                                                <?php $query = "SELECT count(*) FROM livestocks WHERE  user_id = '{$_SESSION['user_id']}' AND type = 'horses'";
                                                                $result = mysqli_query($conn, $query);
                                                                $row = mysqli_fetch_array($result);
                                                                echo $total_count = $row[0]; ?>
                                                            </th>
                                                            <th>
                                                                <?php $query = "SELECT count(*) FROM livestocks WHERE  user_id = '{$_SESSION['user_id']}' AND type = 'donkeys'";
                                                                $result = mysqli_query($conn, $query);
                                                                $row = mysqli_fetch_array($result);
                                                                echo $total_count = $row[0]; ?>
                                                            </th>
                                                            <th>
                                                                <?php $query = "SELECT count(*) FROM livestocks WHERE  user_id = '{$_SESSION['user_id']}' AND type = 'mules'";
                                                                $result = mysqli_query($conn, $query);
                                                                $row = mysqli_fetch_array($result);
                                                                echo $total_count = $row[0]; ?>
                                                            </th>
                                                            <th>
                                                                <?php $query = "SELECT count(*) FROM livestocks WHERE  user_id = '{$_SESSION['user_id']}' AND type = 'hens'";
                                                                $result = mysqli_query($conn, $query);
                                                                $row = mysqli_fetch_array($result);
                                                                echo $total_count = $row[0]; ?>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>