<!DOCTYPE html>
<html>
  <head>
    <?php include '../app/views/layouts/tags.php'; ?>
    <title>Create new glossary | Glossary</title>
  </head>

  <body>
    <?php include '../app/views/layouts/header.php'; ?>
    <div class='container'>

      <h1 class='center'>Create new glossary</h1>
        
      <div class='row'>
        <div class='col-md-6 col-md-offset-3'>

          <?php include '../app/views/layouts/errors_with_id.php'; ?>

          <form accept-charset='UTF-8' action=          <?php echo "/public/glossaries/create/" . $data[0][0]. "/"; ?> method='POST'>
            <label>Topic:</label><br>
            <input name='topic' maxlength='30' class='form-control'/><br>
            <label>Term 1 (Required):</label><br>
            <input name='term1' maxlength='30' class='form-control'/><br> 
            <label>Term 2 (Required):</label><br>
            <input name='term2' maxlength='255' class='form-control'/><br>           
            <label>Term 3 (Required):</label><br>
            <input name='term3' maxlength='255' class='form-control'/><br>
            <label>Term 4:</label><br>
            <input name='term4' maxlength='60' class='form-control'/><br>
            <label>Term 5:</label><br>
            <input name='term5' maxlength='60' class='form-control'/><br>
            <button type='submit' name='submit' class='btn btn-primary'>Create</button>
          </form>

        </div>
      </div>
    </div>
  </body>
</html>