<?php 
        $glossary = Glossary::find($data);
        $topic = ucfirst($glossary->topic);
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include '../app/views/layouts/tags.php'; ?>
    <title><?php echo $topic; ?> | Glossary</title>
  </head>

  <body>
    <?php include '../app/views/layouts/header.php'; ?>
    <div class='container'>

    <h1 class='center'><?php echo ucfirst($glossary->topic); ?></h1><br>
    <h3 class='center'><?php echo "Creator: " . $glossary->user->first_name . " " . $glossary->user->last_name; ?></h3>

    <div class='termsbox'>
      <?php

      foreach ($glossary->terms as $term)
      {
        echo "<div class='term center'><a href=/glossary/public/terms/show/" . $term->getKey() . ">" . $term->term . "</a></div>";
      }

      ?>
    </div>

    </div>
  </body>
</html>

