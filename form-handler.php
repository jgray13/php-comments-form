<?php
include('includes/header.html');
$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

echo "<p>Thanks for the comment $name...</p>";
//echo substr($comments, 0, 70);
echo "<p>We will reply to $email</p>";

include('includes/footer.html');
?>