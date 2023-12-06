<!doctype html>

<html lang="en">
  <head>
    <title>WNC Birds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          WNC Birds
        </a>
      </h1>
    </header>

    <nav>
      <ul>
        <?php 
        if($session->is_logged_in()) { ?>
          <li>Hello <?php echo $session->username; ?>!</li>
          <li><a href="<?php echo url_for('/members/logout.php'); ?>">Logout,</a><?php echo " $session->username" ?></li>
        <?php 
        if($session->is_admin()) { ?>
          <li><a href="<?php echo url_for('/members/index.php'); ?>">Members</a></li>
          <?php } ?>
        <?php 
        } else { ?>
          <li><a href="<?php echo url_for('/members/login.php'); ?>">Login</a></li>
        <?php
      } ?>
      </ul>
    </nav>