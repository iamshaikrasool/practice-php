<?php
  $title = "Top 5 Learning Tips";
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?= $title ?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <div class="wrap">
        <div class="sidebar">
          <?php include 'inc/learning_quotes.html'; ?>
        </div>
        <div class="main">
          <h1><?= $title ?></h1>
          <?php include 'inc/learning_tips.html'; ?>
        </div>
        <div class="footer">Practice Completed: <?= date("F d, Y"); ?></div>
    </div>
  </body>
</html>