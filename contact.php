<!--asdf-->
<?php
$to='flowerquynh@gmail.com';
$subject='Message from your Website Visitor!';
$name = $POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$message = <<<<EMAIL
Hi! My name is $name.

$message

From $name
Contact Email: $email.

EMAIL;
$header = '$email';
if($_POST){
  mail($to, $subject, $message, $header);
  $feedback = 'Email Sent!';
}
?>
<!DOCTYPE html>

<html logo="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Quynh Nguyen</title>
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <link rel="stylesheet" href="css/960.css" type="text/css">
  <link rel="stylesheet" href="css/text.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>
  <div id="topBar"></div>
  <div id="container" class="container_12">
    <div id="header" class="grid_12">
      <a href="index.html">
        <img src="img/Logo.png" alt="Penquynh" id="HomeLogo"/>
      </a>
      <ul>
        <a href="index.html" class="navLink"><li>HOME</li></a>
        <a href="about.html" class="navLink"><li>ABOUT</li></a>
        <a href="resume.html" class="navLink"><li>RESUME</li></a>
        <a href="port.html" class="navLink"><li>PORTFOLIO</li></a>
        <a href="contact.php" class="navLink"><li>CONTACT</li></a>
      </ul>
    </div> <!--end header-->
    <div id="form_wrap" >
      <p id="feedback"><?php echo $feedback;?></p>
      <form action="?" method="post">
        <ul>
          <li>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name"/>
          </li>
          <li>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"/>
          </li>
          <li>
            <label for="message">Message:</label>
            <textarea id="message" name="message" cols="42" rows="10"></textarea>
          </li>
          <li>
            <input type="submit" value="Submit" id="submitButton">
          </li>
        </ul>
      </form>
    </div>
    <img src="img/contact_Pencil.png" alt="Contact Pencil" id="contactPencil"/>
  </div> <!--end container-->

</body>
</html>
