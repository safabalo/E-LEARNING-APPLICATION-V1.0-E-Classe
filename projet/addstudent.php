<?php require('script.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style3.css">
    <script src="bootstrap.bundle.min.js" defer></script>
    <title>Add new student</title>
</head>
<body class="page vh-100">
    <form action="" method="POST" class="bg-white d-flex justify-content-center container-fluid bg-white sign_in p-3 w-md-75">
        <fieldset>
            <legend class="mb-3 align-self-start">Inserez un nouveau utilisateur</legend>
            <div class="mb-3">
            <label class="form-label ms-lg-3"> Name </label>
            <input type="text" class="form-control" placeholder="your name" name="name">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Email </label>
            <input type="email " class="form-control" placeholder="your Email" name="email">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Phone </label>
            <input type="tel" max="10" class="form-control" placeholder="your Phone" name="phone">
            </div>
            <div class="mb-2">
            <label class="form-label ms-lg-3"> Enroll Number </label>
            <input type="text" max="16" class="form-control" placeholder="your Enroll Number" name="enrollnu">
            </div>
            <div class="mb-3">
            <label class="form-label ms-lg-3"> Date of admission </label>
            <input type="date" class="form-control" name="date">
            </div>
            <input type="submit" value="submit" name="submit" class="bg-info rounded-1 border-0 p-2 mx-auto form-control mb-2">
            <p class="error"><?php echo @$error ?></p>
            <p class="success"><?php echo @$success ?></p>
        </fieldset>
    </form>
</body>
</html>