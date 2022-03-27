<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users list</title>
    <?php include 'links.php'; ?>
</head>
<body>
    <div class="container">
        <h3 class="text-center text-primary">List of Records</h3>
        <div class="row">
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th colspan="2">Operation</th>
                </tr>
            </thead>
             <tbody>
                <?php
                include 'connection.php';

                $selectquery = "select * from test order by id asc";

                $query = mysqli_query($conn,$selectquery);

                $nums = mysqli_num_rows($query);

                while($arrdata = mysqli_fetch_array($query)){
                ?>
               <tr>
                <td><?php echo $arrdata['id']; ?></td>
                <td><?php echo $arrdata['name']; ?></td>
                <td><?php echo $arrdata['age']; ?></td>
                <td><?php echo $arrdata['gender']; ?></td>
                <td><a href="edit.php?id=<?php echo $arrdata['id']; ?>" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $arrdata['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    <div class="col-sm-2">
    <a href="index.php" class="btn btn-primary">Back</a>
    </div>
    </div>
</body>
</html>