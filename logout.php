<?php
//logout.php
session_start();
error_reporting( error_reporting() & ~E_NOTICE );
if ($_SESSION["customer_id"] == "") $notLoggedIn = true;
session_unset();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Krishna Godavari Producer Company - Fresh and Favorite - Logging Out</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src="scripts/menu.js"></script>
  </head>
  <body>
    <div id="page">
      <?php
      include("common/banner.php");
      include("common/mainmenu.html");
      ?>
      <div id="content">
        <div id="textOnly" class="FeedbackForm">
        <?php if ($notLoggedIn) { ?>
        <p>Thank you for visiting Nature's Source.<br />
        You have not yet logged in.</p>
        <p><a href="login.php" class="noDecoration"> Click here if you wish to
          log in.</a></p>
        <p><a href="department.php" class="noDecoration"> Click here to browse
          our product catalog.</a></p>
        <?php } else { ?>
        <p>Thank you for visiting our e-store.<br />
        You have successfully logged out.</p>
        <p><a href = "login.php" class="noDecoration"> Click here if you wish
          to log back in.</a></p>
        <p><a href = "department.php" class="noDecoration"> Click here to
          browse our product catalog.</a></p>
        <?php } ?>
        </div>
      </div>
      <?php include("common/footer.html"); ?>
    </div>
  </body>
</html>
