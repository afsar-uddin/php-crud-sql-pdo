<!DOCTYPE html>
<html lang="en">
<?php
require_once('signupConfig.php');
$data = new signupConfig();
$fetchAll = $data->fetchAll();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | OOP | PDO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
    ">
</head>

<body>
    <div class="crud">
        <div class="intro text-center mt-3">
            <h1>List of all records</h1>
            <a href="addnew.php" class="btn btn-success">Add New</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fetchAll as $single) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $single['firstName']; ?></th>
                        <td><?php echo $single['lastName']; ?></td>
                        <td><?php echo $single['address']; ?></td>
                        <td><a href="delete.php?id=<?=$single['id'] ?>&req=delete" class="btn btn-danger">Delete</a> <a href="#" class="btn btn-primary">Update</a>
                        </td>
                    </tr>
                <?php

                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>