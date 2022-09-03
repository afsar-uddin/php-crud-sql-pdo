<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
    ">
</head>

<body>
    <div class="crud-signup">
        <div class="intro text-center mt-3">
            <h1>Fiill in the input and save</h1>
            <a href="index.php" class="btn btn-success">Back to home</a>
        </div>
        <form action="signupProcess.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="firstName">First Name</label>
                <input type="text" class="form-control" name="firstName" id="firstName">
            </div>
            <div class="mb-3">
                <label class="form-label" for="lastName">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="lastName">
            </div>
            <div class="mb-3">
                <label class="form-label" for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address">
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="form-control" name="save" id="submit">
            </div>
        </form>
    </div>
</body>

</html>