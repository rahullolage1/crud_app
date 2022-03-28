<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <?php include 'links.php'; ?>
  </head>
  <body>
    <div class="container col-md-4">
      <h2 class="text-primary text-center">Registration Form</h2><br>
            <form action="action.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email ID:</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Mobile No:</label>
                    <input type="text" class="form-control" name="mobile" required>
                </div>
                <div class="form-group">  
                    <label>Age</label>
                    <input type="text" name="age" class="form-control" required /><br />
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


<!-- 
<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
</div> -->



