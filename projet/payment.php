<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>Payment</title>
</head>
<body class="body">
<?php
    include 'navbar.php'
?>
    <?php
        include 'sidebar.php'
    ?>
    <main class="main float-end mt-4">
        <article class="article_table">
            <div class=" mb-3 mt-5 d-flex justify-content-between student__list ms-2">
                <h2 class="h1">Payment details</h2>
                <img src="img/Up-Down.svg" alt="">
            </div>
            <table class="table table-striped ms-4 bg-white payment__table">
                <thead>
                    <tr class="table-head">
                        <th scope="col">Name</th>
                        <th scope="col">Payment scheduel</th>
                        <th scope="col">Bill number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance amount</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                      </tr>
                </thead>
                <tbody>


                <?php 
                     $payments=json_decode(file_get_contents('datapay.json'),true);
                    foreach($payments as $payment) : ?>
                  <tr>
                    <th scope="row"><?php echo $payment["name"]?></th>
                    <td><?php echo $payment["payment scheduel"]?></td>
                    <td><?php echo $payment["bill number"]?></td>
                    <td><?php echo $payment["paid amount"]?></td>
                    <td><?php echo $payment["balance amount"]?></td>
                    <td><?php echo $payment["date"]?></td>
                    <td class="text-info"><img src="img/Eye.svg" alt=""></td>
                  
                    
                  <?php endforeach ?>
                 
                  
                </tbody>
              </table>
            </article>
    </main>
</body>
</html>