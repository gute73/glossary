<?php 
        $term = Term::find($data);
        $word = ucfirst($term->term);
?>

<!DOCTYPE html>
<html>
  <head>
    <?php include '../app/views/layouts/tags.php'; ?>
    <title><?php echo $word; ?> | Glossary</title>
  </head>

  <body>
    <?php include '../app/views/layouts/header.php'; ?>
    <div class='container'>

      <h1 class='center'><?php echo $word; ?></h1><br>

      <h3 class='center'><?php echo "Creator: " . $term->glossary->user->first_name . " " . $term->glossary->user->last_name; ?></h3>
    
      <h3 class='center'><?php echo "Glossary: " . "<a href=/public/glossaries/show/" . $term->glossary->getKey() . ">" . ucfirst($term->glossary->topic) . "</a>"; ?></h3>

      <div class='center'><a href=<?php echo "/public/translations/new/" . $data; ?> >Add a translation</a></div> 

      <div class='translationslist center'>
      <?php

        foreach ($term->translations->reverse() as $translation)
        {
          echo "<div class='translationsbox center'>
          <div class='translator'>Translator: " . $translation->user->first_name . $translation->user->last_name . "</div><br>
          <div class='language'>Language: " . $translation->language . "</div><br>
          <div class='translation'>Translation: " . $translation->translation . "</div><br>
          <div class='comment'>Comment: " . $translation->comment . "</div><br>
          <div class='ago'>Created " . $glossary->created_at->diffForHumans() . "</div><br></div>";
        }

        ?>
      </div>
    </div>
  </body>
</html>

