<?php
  $x=1;
  $y=1;
  $out="<ul>";
  for($x=1; $x <= 5; $x++){
      $out.="<li>{$x}</li>";
      $out.="<ul>";
      for($y=1; $y <= 5; $y++){
          $out.="<li>{$y}</li>";
      }
      $out.="</ul>";
  }
  $out.="</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $out; ?>
</body>
</html>
