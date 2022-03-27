<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>test</title>
    <?php include 'links.php'; ?>
  </head>
  <body>
    <div class="container col-md-6">
        <h2>User input</h2>
            <form method="post">
                  <?php 
                  include 'connection.php';
                  // To fetch data from database
                  $Id = $_GET['id'];

                  $selectquery = "select * from test where id=$Id";

                  $query = mysqli_query($conn,$selectquery);
                  // to fetch record
                  $res = mysqli_fetch_array($query);

                  // echo "<pre>";
                  // print_r($res['gender']);
                  // Now this value put in the input field.

                  // Update query
                  if(isset($_POST['submit'])){

                    $idupdate = $_GET['id'];
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $gender = $_POST['gender'];

                    echo "<pre>";
                    print_r($gender);
                  //   // to write update query
                    $updatequery = "update test set id=$idupdate, name='$name', age='$age', gender='$gender' where id=$idupdate";

                    $query = mysqli_query($conn,$updatequery);
                  //   // done
                  }

                  ?>
                <div class="form-group">
                <label>Name</label> 
                <input type="text" name="name" class="form-control" value="<?php echo $res['name']; ?>" required /><br />
                </div>
                <div class="form-group">  
                <label>Age</label>
                <input type="text" name="age" class="form-control" value="<?php echo $res['age']; ?>" required /><br />
                </div>
                <div class="form-group">  
                <label>Gender</label>
                <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio1" name="gender" value="male">Male
                      <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
                      <label class="form-check-label" for="radio2"></label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="gender" value="others">Other
                      <label class="form-check-label"></label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                <?php if(isset($_POST['submit'])){
                    header('location:show.php');
                }
                ?>
            </form>
    </div>
  </body>
</html>






