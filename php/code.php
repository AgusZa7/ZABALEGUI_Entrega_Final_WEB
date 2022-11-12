<?php
$to = "aguszabalegui@gmail.com";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$message = "
<html>
<head>
<title>Contact Form</title>
</head>
<body>
<h1>Contact information from the website</h1>
<p>User name: $name </p> 
<p>Email: $email </p> 
<p>Comment: $comment </p> 
</body>
</html>";
 echo 'Thanks for getting in contact with us!';
mail($to, $subject, $message, $headers);
?>
