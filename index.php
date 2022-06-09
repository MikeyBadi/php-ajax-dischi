<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php include('disc_db.php'); ?>

  <?php foreach($discs_db as $disc):?>
    <img src="<?php echo $disc['poster']?>" alt="<?php echo $disc['title']?>">
    <h3><?php echo $disc['title']?></h3>
    <p><?php echo $disc['author']?></p>
    <i><?php echo $disc['year']?><br></i>
    <hr>
  <?php endforeach;?>
</body>
</html>