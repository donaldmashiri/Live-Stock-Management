<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Add New Live Stock</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <?php
                        if(isset($_POST['submit'])){

                            $names = $conn -> real_escape_string($_POST['names']);
                            $type = $conn -> real_escape_string($_POST['type']);
                            $description = $conn -> real_escape_string($_POST['description']);
                            $age = $conn -> real_escape_string($_POST['age']);
                            $conditions = $conn -> real_escape_string($_POST['conditions']);
                            $color = $conn -> real_escape_string($_POST['color']);
                            $gender = $conn -> real_escape_string($_POST['gender']);
                            $height = $conn -> real_escape_string($_POST['height']);

                                $sql = "INSERT INTO livestocks (user_id, names, gender, type, description, age, conditions, date_added, height, color)
                                VALUES ({$_SESSION['user_id']},'{$names}', '{$gender}', '{$type}', '{$description}', '{$age}',
                                       '{$conditions}', now(), '{$height}', '{$color}')";

                                if ($conn->query($sql) === TRUE) {

                                    echo "<h4 class='alert alert-success'>Live stock successfull added</h4>";

                                }else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }
                        }
                        ?>

                        <form class="font-weight-bolder" action="" method="post">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Type of LiveStock</label>
                                        <select class="form-control" name="type" id="">
                                            <option value="">Type of Livestock</option>
                                            <option value="cows">cattle</option>
                                            <option value="sheeps">sheep</option>
                                            <option value="pigs">pigs</option>
                                            <option value="goats">goats</option>
                                            <option value="horses">horses</option>
                                            <option value="donkeys">donkeys</option>
                                            <option value="mules">mules</option>
                                            <option value="Hens">Hens</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Name (optional)</label>
                                        <input type="text" name="names" class="form-control" placeholder="" minlength="3" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Height</label>
                                        <select class="form-control" name="height" id="">
                                            <option value="less than 1 meter">less than 1m</option>
                                            <option value="between 1 and 1.5 meters">between 1 and 1.5 meters</option>
                                            <option value="more than 1.5 meters">more than 1.5 meters</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Age</label>
                                        <input type="number" name="age" class="form-control" placeholder="" min="1" max="15" minlength="4" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="title">Female or Male</label>
                                        <select class="form-control" name="gender" id="">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="title">Color</label>
                                        <select class="form-control" name="color" id="">
                                            <option value="white">White</option>
                                            <option value="yellow">Yellow</option>
                                            <option value="green">Green</option>
                                            <option value="black">Black</option>
                                            <option value="brown">Brown</option>
                                            <option value="azure">Azure</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Conditions</label>
                                        <input type="text" name="conditions" class="form-control" placeholder="" minlength="4" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="title">Additional Description Or Information</label>
                                        <textarea class="form-control" name="description" id="" cols="15" rows="5"></textarea>
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