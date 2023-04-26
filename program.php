<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Program</title>
  </head>
  <body>
    <h1>Your Personalized Fitness Program</h1>
    <?php
      $level = $_POST['level'];
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $goals = $_POST['goals'];

      echo "<p>Level: " . $level ."</p>";
      echo "<p>Height: " . $height ."</p>";
      echo "<p>Weight: " . $weight ."</p>";
      echo "<p>Target(s): ";
        echo $_POST['target'][0]. " ";
        echo $_POST['target'][1]. " ";
        echo $_POST['target'][2]. " ";
        echo $_POST['target'][3]. " ";
      echo "<p>";
      echo "<p>Goals: " . $goals ."</p>";

    ?>
  </body>
</html>
