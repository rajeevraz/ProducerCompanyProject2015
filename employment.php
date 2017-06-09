<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- feedback.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Apply for positions in KGPC – Your favorite employer</title>
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
<div id="content">
        <div id="textRight">
          <p>As we grow and expand, and open new locations, we
          will continually be looking for new empoyees who are interested
          in a healthy lifestyle for themselves and helping to provide the
          same for others. If you are such a person, you may wish to submit
          your job application to us.</p>
        </div>
      </div>
          <h4> Apply for positions in KGPC – Your favorite employer !</h4>
          <form id="contactForm" onsubmit="return validateContactForm()"
          action="scripts/processEmployment.php" method="post">

 <table summary="Feedback Form Version 2 with Submit, Reset Buttons">
              <tr valign="top">
                <td>Position interested in:</td>
                <td><select name="position">
                  <option></option>
                 <option>Field Assistant</option>
                  <option>Stock house Assistant</option>
                   <option>Clerical</option>
                  <option>Managerial</option>
                   <option>IT</option>
                  <option>Multi-Tasking</option>

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
                <td><label for="jobnow">Current job:</label></td>
                <td><input id="jobnow" type="text" name="jobnow"
                size="40" /></td>
              </tr>
                <tr valign="top">
                <td><label for="cmpny">Company/Institute:</label></td>
                <td><input id="cmpny" type="text" name="cmpny"
                size="40" /></td>
              </tr>
                <tr valign="top">
                <td><label for="expyrs">Years of experience:</label></td>
                <td><input id="expyrs" type="text" name="expyrs"
                size="40" /></td>
              </tr>
                 <tr valign="top">
                <td><label for="degree">Degree / Certificate:</label></td>
                <td><input id="degree" type="text" name="degree"
                size="40" /></td>
              </tr>
                <tr valign="top">
                <td><label for="univ">University:</label></td>
                <td><input id="univ" type="text" name="univ"
                size="40" /></td>
              </tr>
                 <tr valign="top">
                <td><label for="yearsg">Years of graduation/completion :</label></td>
                <td><input id="yearsg" type="text" name="yearsg"
                size="40" /></td>
              </tr>
              <tr valign="top">
                <td><label for="comments">Brief paragraph stating why would you like to work for KGPC :</label></td>
                <td><textarea id="comments" name="message" rows="10" cols="30">
                </textarea></td>
              </tr>
              <tr>
                <td colspan="2"><p><label for="reply">Please check here for future job openings information: </label><input id="reply"
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

