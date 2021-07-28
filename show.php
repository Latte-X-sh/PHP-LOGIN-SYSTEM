<?php
require 'lib/functions.php';
$stored_users = fetch_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing results from db</title>
</head>
<body>
<?php foreach ($stored_users as $users) { ?>
                <div class="col-lg-4 ">
                  
                  <h2><?php echo $users['name']; ?></h2>
                  <?php echo $users['id']; ?>
                  <br>
                    <?php echo $users['email']; ?>
                    <br>
                    <?php echo $users['password']; ?>
                    <br>
                    
                </div>
            <?php } ?>
</body>
</html>