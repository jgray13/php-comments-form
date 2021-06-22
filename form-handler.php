<?php
include 'includes/header.html';
$name = '';
$email = '';
$comments = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['name'])) {
        $name = $_POST['name'];
	}
	if (isset($_POST['email'])) {
        $email = $_POST['email'];
	}
	if (isset($_POST['comments'])) {
        $comments = $_POST['comments'];
	}

echo "<p>Thanks for the comment $name...</p>";
echo "<p>We will reply to $email</p>";
}

include 'includes/footer.html';
?>