<?php
    session_start();
?>

<?php 
    $errors = array();
    if(isset($_POST['save_student']))
    {
        // checking required fields
        if(empty($_POST['name']))
        {
            $errors[] = 'Name is required'; 
        }

        else{
            $errors[] = 'Name field is correct'; 
        }

        if(empty($_POST['email']))
        {
            $errors[] = 'Email is required'; 
        }

        else{
            $errors[] = 'Email field is correct'; 
        }

        if(empty($_POST['phone']))
        {
            $errors[] = 'Phone is required'; 
        }

        else{
            $errors[] = 'Phone field is correct'; 
        }

        if(empty($_POST['course']))
        {
            $errors[] = 'Course is required'; 
        }

        else{
            $errors[] = 'Course field is correct'; 
        }
    }
?>

<?php include('includes/header.php'); ?>

    
  <div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h4>Student Add
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <?php
                    if (!empty($errors))
                    {
                        echo 'Error(s) on your form.';

                    } 
                
                
                   
                ?>

                <div class="card-body">
                    <form action="code.php" method="POST">
                        
                    <div class="mb-3">
                    <lable>Student Name</lable>
                    <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                    <lable>Student Email</lable>
                    <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                    <lable>Student Phone</lable>
                    <input type="text" name="phone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                    <lable>Student Course</lable>
                    <input type="text" name="course" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>