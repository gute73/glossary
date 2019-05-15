<?php

  $term = Term::find($data[0][0]);

?>

<!DOCTYPE html>
<html>
  <head>
    <?php include '../app/views/layouts/tags.php'; ?>
    <title>Add a translation | Glossary</title>
  </head>

  <body>
    <?php include '../app/views/layouts/header.php'; ?>
    <div class='container'>

      <h1 class='center'>Add a translation for "<?php echo $term->term; ?>"</h1>
        
      <div class='row'>
        <div class='col-md-6 col-md-offset-3'>

          <?php include '../app/views/layouts/errors_with_id.php'; ?>

          <form accept-charset='UTF-8' action=          <?php echo "/glossary/public/translations/create/" . $data[0][0] . "/"; ?> method='POST'>
            <label>Language:</label><br>
            <input name='language' maxlength='30' class='form-control'/><br>
            <label>Translation:</label><br>
            <input name='translation' maxlength='255' class='form-control'/><br>
            <label>Comment (optional):</label><br>
            <input name='comment' maxlength='255' class='form-control'/><br> 
            <button type='submit' name='submit' class='btn btn-primary'>Submit</button>
          </form>

        </div>
      </div>
    </div>
  </body>
</html>