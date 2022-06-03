<?php
  echo 'Hello php';

  echo 1;
  echo 2;
  echo 123, "Hello", 12.3;

  print 123;

  print_r("Hello");
  print_r([1,2,3]);

  var_dump("Hello");
  var_dump([1,2,3]);
  var_dump(true);

  var_export("Hello");
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
  <h1><?php echo "Post man"; ?></h1>
  <h1><?= "Post man"; ?></h1>
</body>
</html>