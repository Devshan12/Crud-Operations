<?php
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student view</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container mt-5">


    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h4>Student View Details
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM students WHERE id='$student_id' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $student = mysqli_fetch_array($query_run);
                            ?>
                        
                        
                        <div class="mb-3">
                            <lable>Student Name</lable>
                            <p class="form-control">
                                <?= $student['name'];?>
                            </p>
                        </div>
    
                        <div class="mb-3">
                            <lable>Student Email</lable>
                            <p class="form-control">
                                <?= $student['email'];?>
                            </p>
                        </div>
    
                        <div class="mb-3">
                            <lable>Student Phone</lable>
                            <p class="form-control">
                                <?= $student['phone'];?>
                            </p>
                        </div>
    
                        <div class="mb-3">
                            <lable>Student Course</lable>
                            <p class="form-control">
                                <?= $student['course'];?>
                            </p>
                        </div>
    
                       
                    
                            <?php

                        }
                        else
                        {
                            echo "<h4>No Such Id Found</h4>";
                        }

                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
  </div>

    <!-- Option 1: Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>