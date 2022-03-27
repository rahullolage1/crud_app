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
            <form action="action.php" method="post">
                <div class="form-group">
                <label>Name</label> 
                <input type="text" name="name" class="form-control" required /><br />
                </div>
                <div class="form-group">  
                <label>Age</label>
                <input type="text" name="age" class="form-control" required /><br />
                </div>
                <div class="form-group">  
                <label>Gender</label>
                <!-- <input type="text" name="gender" class="form-control" required /><br /> -->
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio1" name="gender" value="male">Male
                      <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
                      <label class="form-check-label" for="radio2"></label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="radio2" name="gender" value="other">Other
                      <label class="form-check-label"></label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <a href="show.php" class="btn btn-primary">Show Record</a>
            </form>
    </div>
  </body>
</html>




