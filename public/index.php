<?php

require "../vendor/autoload.php";

use App\Controllers\UserController;

$user = new UserController;

$text = $user->index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>
<body>
  <h1><?php echo $text?></h1>
</body>
</html>
