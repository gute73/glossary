<?php 
  if (!(isset($_SESSION)))
  {
    session_start();
  }
?>

<header class='navbar navbar-inverse'>
  <div class='container'>
    <span class='logo'><a href='../home/index'>Glossary</a></span>
    <nav>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='/public/home/index'>Home</a></li>
        <li><a href='/public/home/about'>About</a></li>

      <?php if (isset($_SESSION) && $_SESSION == true): ?>

        <li><a href='/public/glossaries/index'>Glossaries</a></li>
        <li><a href='/public/login/destroy'>Logout</a></li>

      <?php else: ?>

        <li><a href='/public/users/new'>Signup</a></li>
        <li><a href='/public/login/new'>Login</a></li>

      <?php endif; ?>

      </ul>
    </nav>
  </div>
</header>