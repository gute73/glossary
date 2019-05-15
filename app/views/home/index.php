<?php

  $glossaries = $data;

?>

<!DOCTYPE html>
<html>
  <head>
    <?php include '../app/views/layouts/tags.php'; ?>
    <title>Home | Glossary</title>
  </head>

  <body>
    <?php include '../app/views/layouts/header.php'; ?>
    <div class='container'>

      <?php if (isset($_SESSION) && $_SESSION == true)
      {

        $current_user = User::where('id', $_SESSION['user_id'])->first();

        echo "<h1 class='center'>" . $current_user->first_name . " " . $current_user->last_name . "</h1>";

        echo "<h3 class='center'>Your Glossaries</h3>";
        echo "<div class='center'><a href=/glossary/public/glossaries/new/" . strval($current_user->id) . ">Create new glossary</a></div><br>"; 


        echo "<div class='glossariesbox'>";

        foreach ($glossaries as $glossary)
        {
          echo "<div class='glossarybox center'><div class='glossary'><a href=/glossary/public/glossaries/show/" . $glossary->getKey() . ">" . ucfirst($glossary->topic) . "</a></div><div class='ago'>Created " . $glossary->created_at->diffForHumans() . "</div></div>";
        }

      }
      else
      {

      echo "<div class='jumbotron'>
        <h1 class='center'>Glossary</h1>
        <br>
        <h3 class='center'>Your Translation Crowd-Sourcing Tool</h3>
      </div>";
      }

      ?>
    </div>
  </body>
</html>