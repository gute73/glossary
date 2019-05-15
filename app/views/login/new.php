<!DOCTYPE html>
<html>
  <head>
    <?php include '../app/views/layouts/tags.php'; ?>
    <title>Sign up | Glossary</title>
  </head>

  <body>
    <?php include '../app/views/layouts/header.php'; ?>
    <div class='container'>

      <h1 class='center'>Log in</h1>
        
      <div class='row'>
        <div class='col-md-6 col-md-offset-3'>

        <?php include '../app/views/layouts/errors.php'; ?>

          <form accept-charset='UTF-8' action='/public/login/create' method='POST'>           
            <label>Email Address:</label><br>
            <input name='email' maxlength='255' class='form-control'/><br>
            <label>Password:</label><br>
            <input name='password' maxlength='60' class='form-control'/><br>
            <button type='submit' name='submit' class='btn btn-primary'>Log in</button>
          </form>

        </div>
      </div>
    </div>
  </body>
</html>