<?php
//payment.php
session_start();
if (preg_match('/purchase.php/', getenv('HTTP_REFERER')) == 0)
{
    header('Location: purchase.php?prod=view');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Krishna Godavari Producer Company Ltd</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src="scripts/menu.js"></script>
    <?php include "scripts/db.php" ?>
  </head>
  <body>
    <div id="page">
      <?php
      include("common/banner.php");
      include("common/mainmenu.html");
      ?>
      <div id="content">
        <div id="payment">
          <?php include "scripts/processPayment.php" ?>
        </div>
      </div>
      <?php include("common/footer.html"); ?>
    </div>
  </body>
</html>
