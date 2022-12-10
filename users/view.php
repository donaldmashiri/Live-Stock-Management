<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

<?php
$view = $_GET['view'];

$sql = "SELECT * FROM livestocks WHERE livestock_id ='$view'";
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
        $status = $row["status"];
        $conditions = $row["conditions"];
        $height = $row["height"];
        $color = $row["color"];
        $date_added = $row["date_added"];
        $status = $row["status"];

    }}

?>


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
                        <h6 class="m-0 font-weight-bold text-white">View Your Livestock</h6>
                        <a class="btn btn-primary text-white btn-sm justify-content-end" data-toggle="modal" data-target="#staticBackdrop">Add New Diagonisis</a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <div class="card-header font-weight-bold">Live Stock Details</div>
                                    <div class="card-body">
                                        <table class="table table-sm">
                                            <thead>
                                            <?php
                                            echo "<tr><th scope='col'>LS Numbwer: </th> <td>LS0$livestock_id</td></tr>";
                                            echo "<tr><th scope='col'>Name: </th> <td>$names</td></tr>";
                                            echo "<tr><th scope='col'>Type: </th> <td>$type</td></tr></tr>";
                                            echo "<tr><th scope='col'>Height: </th> <td>$height</td></tr>";
                                            echo "<tr><th scope='col'>Age: </th> <td>$age</td></tr>";
                                            echo "<tr><th scope='col'>Color: </th> <td>$color</td></tr>";
                                            echo "<tr><th scope='col'>Conditions: </th> <td>$conditions</td></tr>";
                                            echo "<tr><th scope='col'>Description: </th> <td>$description</td></tr>";
                                            echo "<tr><th scope='col'>Date Added: </th> <td>$date_added</td></tr>";
                                            echo "<tr><th scope='col'>Stock: </th> <td class='font-weight-bolder text-success'>$status</td></tr>";
                                            ?>

                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <?php
                                if(isset($_POST['submit'])){

                                    $conditions = $conn -> real_escape_string($_POST['conditions']);
                                    $prescription = $conn -> real_escape_string($_POST['prescription']);

                                    $sql = "INSERT INTO vertinary (user_id, livestock_id, disease, solution, date)
                        VALUES ({$user_id},{$livestock_id}, '{$conditions}','{$prescription}', now())";

                                    if ($conn->query($sql) === TRUE) {
                                        echo "<h4 class='alert alert-success'>LiveStock diagnostics was successfully recorded</h4>";
                                    }else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                                }

                                ?>
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">VET#</th>
                                        <th scope="col">Condition</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql = "SELECT * FROM vertinary WHERE livestock_id = '$view' ORDER  BY vet_id DESC ";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $vet_id = $row["vet_id"];
                                            $disease = $row["disease"];
                                            $solution = $row["solution"];
                                            $date = $row["date"];
                                            ?>
                                            <tr>
                                                <th scope="row">VET00<?php echo $vet_id ?></th>
                                                <td><?php echo $disease ?></td>
                                                <td><?php echo $solution ?></td>
                                                <td><?php echo $date ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }else{
                                        echo "<h1 class='alert alert-danger'>Not yet diagnosed </h1>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Record Diagnostics</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="user" method="post">
                        <div class="form-group">
                            <input type="text" name="conditions" class="form-control form-control-user"
                                   id="MsuEmail" aria-describedby="emailHelp"
                                   placeholder="Enter Conditions" minlength="3" required>
                        </div>
                        <div class="form-group">
                            <textarea name="prescription" id="" class="form-control form-control-user" placeholder="Enter prescription" cols="5" rows="3" minlength="3" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                            Submit
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Submit</button> -->
                </div>
            </div>
        </div>
    </div>



    <!-- End of Main Content -->
<?php include_once ('../includes/footer.php'); ?>