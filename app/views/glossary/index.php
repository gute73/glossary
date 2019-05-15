<?php

$glossaries = $data;

?>

<!DOCTYPE html>
<html>
  <head>
    <?php include '../app/views/layouts/tags.php'; ?>
    <title>Glossaries | Glossary</title>
  </head>

  <body>
    <?php include '../app/views/layouts/header.php'; ?>
    <div class='container'>

    <h1 class='center'>Glossaries</h1>

    <div class='center search'>
      <form accept-charset='UTF-8' action='/public/glossaries/search' method='POST'>
        <input name='searchvalue' maxlength='255' class='form-control searchbox'/>
        <button type='submit' name='submit' class='btn btn-primary searchbutton'>Search glossaries</button>
      </form>
    </div>

    <div class='glossariesbox'>
      <?php

      foreach ($glossaries as $glossary)
      {
        echo "<div class='glossarybox center'><div class='glossary'><a href=/public/glossaries/show/" . $glossary->getKey() . ">" . ucfirst($glossary->topic) . "</a></div>";
        echo "     " . "<div class='glossaryName'>Created by: " . $glossary->user->first_name . " " . $glossary->user->last_name . " " . $glossary->created_at->diffForHumans() . "</div></div><br>";
      }

      ?>
    </div>

    </div>
  </body>
</html>

