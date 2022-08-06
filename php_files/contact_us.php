<h1 class=".h1">Contact Us</h1>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  From: <input type="text" id="from" class="from" name="from"><br>
  Subject: <input type="text" id="subject" class="subject" name="subject"><br>
  Message: <textarea rows="10" id="message" class="message" cols="40" name="message"></textarea><br>
  <input type="submit" id="submit_feedback" class="submit_feedback" name="submit" value="Submit Feedback">
  </form>
  <?php 
} else {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("webmaster@example.com",$subject,$message,"From: $from\n");
    echo "Thank you for sending us feedback";
  }
}
?>