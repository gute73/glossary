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
        <li><a href='/glossary/public/home/index'>Home</a></li>
        <li><a href='/glossary/public/home/about'>About</a></li>

      <?php if (isset($_SESSION) && $_SESSION == true): ?>

        <li><a href='/glossary/public/glossaries/index'>Glossaries</a></li>
        <li><a href='/glossary/public/login/destroy'>Logout</a></li>

      <?php else: ?>

        <li><a href='/glossary/public/users/new'>Signup</a></li>
        <li><a href='/glossary/public/login/new'>Login</a></li>

      <?php endif; ?>

      </ul>
    </nav>
  </div>
</header>