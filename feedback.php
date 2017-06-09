<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- feedback.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Apply for stakeholder membership</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="refresh" content="60" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src="scripts/menu.js">
    </script>
    <script type="text/javascript" src="scripts/feedback.js">
    </script>
  </head>
  <body>
    <div id="page">
      <?php
      include("common/banner.php");
      include("common/mainmenu.html");
      ?>
      <div id="content">
        <div id="textOnly" class="FeedbackForm">
          <h4> Join us to be a member !</h4>
          <form id="contactForm" onsubmit="return validateContactForm()"
          action="scripts/processFeedback.php" method="post">
            <table summary="Feedback Form Version 2 with Submit, Reset Buttons">
              <tr valign="top">
                <td>Salutation:</td>
                <td><select name="salute">
                  <option></option>
                 <option>Dr.</option>
                  <option>Mr.</option>
                   <option>Mrs.</option>
                  <option>Ms.</option>
                </select></td>
              </tr>
              <tr valign="top">
                <td><label for="firstName">First Name:</label></td>
                <td><input  id="firstName" type="text" name="firstName"
                size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="lastName">Last Name:</label></td>
                <td><input  id="lastName" type="text" name="lastName"
                size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="email">E-mail Id:</label></td>
                <td><input id="email" type="text" name="email" size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="phone">Contact Phone:</label></td>
                <td><input id="phone" type="text" name="phone" size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="majoroccupation">Major Occupation:</label></td>
                <td><input id="majoroccupation" type="text" name="majoroccupation"
                size="40" /></td>
              </tr>
                 <tr valign="top">
                <td><label for="shares">No of shares interested in:</label></td>
                <td><input id="shares" type="text" name="shares"
                size="40" /></td>
              </tr>
                 <tr valign="top">
                <td><label for=income">Annual income:</label></td>
                <td><input id="income" type="text" name="income"
                size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="info">Any other information :</label></td>
                <td><textarea id="info" name="info" rows="10" cols="30">
                </textarea></td>
              </tr>
              <tr>
                <td colspan="2"><p><label for="reply">Please check here for a call back immediately: </label><input id="reply"
                type="checkbox" name="reply" value="yes" /></p></td>
              </tr>
              <tr>
                <td><input type="submit" value="Submit Application" /></td>
                <td align="right"><input type="reset" value="Reset Form" /></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
      <?php
      include("common/footer.html");
      ?>
    </div>
  </body>
</html>
