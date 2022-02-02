<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>Student</title>
</head>
<body class="body">
<?php
    include 'navbar.php';
?>
    <?php
        include 'sidebar.php';
    ?>
<main class="main float-end mt-4">
        <article class="" >
            <div class="d-flex justify-content-between student__list ms-2">
                <h2 class="h1">Student list</h2>
                <div>
                    <img src="img/Up-Down.svg" alt="" class="me-2">
                    <a class="btn btn-info text-white" href="addstudent.php">ADD NEW STUDENT</a>
                </div>
                
            </div>
            

            <table class="table student_table ">
                <thead class="table-head">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="thead__elements">Name</th>
                        <th scope="col" class="thead__elements">Email</th>
                        <th scope="col" class="thead__elements">Phone</th>
                        <th scope="col" class="thead__elements">Enroll Number</th>
                        <th scope="col" class="thead__elements">Date of admission</th>
                    </tr>
                </thead>
                  <tbody>
                        
                              
                                <?php 
                                $users=json_decode(file_get_contents('data.json'),true);
                                foreach($users as $user) : 
                                   ?>
                                    <tr class="table__elements">
                                    <th scope="row"><img src="img/user-profile.png" alt="user_svg"></th>
                                    <td><?php echo $user['name'];?></td>
                                    <td><?php echo $user['email'];?></td>
                                    <td><?php echo $user['phone'];?></td>
                                    <td><?php echo $user['enroll number'];?></td>
                                    <td><?php echo $user['date of admission'];?></td>
                                    <td>
                                        <img src="img/Pen.svg" alt="">
                                    </td>
                                    <td>
                                        <img src="img/Garbage.svg" alt="garbage">
                                    </td>
                                    </tr>
                                <?php endforeach ?>
                  </tbody>
                </table>
            </article>    
</body>
</html>