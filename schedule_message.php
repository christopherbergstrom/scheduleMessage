<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    h1 {
      padding: 0.5rem 1rem;
    }
  </style>
</head>
<body>
  <div class="w3-display-middle w3-card-4">
    <?php
      $day = date("w");
      $date = date("M j, Y");
      $message = "Today is " . $day . " " . $date;
      echo "<h1 class=''>" . $message . "</h1>"
    ?>
  </div>
</body>
</html>