<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $to = "dodije5707@naymeo.com";
    $subject = "Test WordPress Hook using custom PHP";
    $message = "You have received email : " . $email . " from : " . $name;
    mail($to, $subject, $message, $header);
    header("Location: index.php?mailsend");
}
