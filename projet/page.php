<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <h1>SAFAE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, non a dicta doloremque aliquam adipisci earum atque nemo ipsum modi, commodi, at excepturi voluptate iste id temporibus reprehenderit magni quas.</p>
        </section>
        <section>
            <table>
                <thead>
                   <tr>email</tr>
                   <tr>password</tr>
                   <tr>edit</tr>
                   <tr>delete</tr>
                </thead>
                <tbody>
                    <?php 
                    $mysqli= mysqli_connect('localhost', 'root', '', 'test');
                    $test= $mysqli->query("SELECT * FROM testing");
                    foreach($test as $testing):
                    ?>
                    <td><?php echo $testing['email']; ?></td>
                    <td><?php echo $testing['password']; ?></td>
                    <td>
                        <a href="form.php?edit=<?php echo $testing['id']; ?>">
                        <button class="btn btn-danger" >Edite</button>
                        </a>
                    </td>
                    <td>
                        <a href="form.php?delete=<?php echo $testing['id']; ?>">
                        <button class="btn btn-info">Delete</button>
                        </a>
                    </td>
                    <?php endforeach;?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>