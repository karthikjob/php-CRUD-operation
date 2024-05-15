<?php
include "db.php";

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lasttname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO store (id,firstname,lastname,email,gender) VALUES (NULL,'$firstname','$lasttname','$email','$gender')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=New record created successfully");

    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <title>PHP CRUD APPLICATION </title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
        PHP COMPLETE CRUD APPLICATION
    </nav>

    <div class="container">
        <div class="text-center">
            <h4>Add New User</h4>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width: 50vw;min: width 300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label "> First Name: </label>
                    <input type="text" class="form-control" name="firstname" placeholder="Jamesh">
                </div>

                <div class="col">
                    <label class="form-label "> Last Name: </label>
                    <input type="text" class="form-control" name="lastname" placeholder="Bond">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label "> Email: </label>
                <input type="email" class="form-control" name="email" placeholder="name@gmail.com">

            </div>

            <div class="form-group mb-3">
                <label>Gender:</label>&nbsp;
                <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                <label for="male" class="form-input-label">Male</label>

                &nbsp;
                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label for="female" class="form-input-label">Female</label>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>