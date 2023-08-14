<?php

if($_POST["message"]) {

    mail("kathyshomeandpet@gmail.com", "Price Quote",
    
    $_POST["inset your message here"]. "From: kathyshomeandpet@gmail.com");

}

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Display the submitted data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
}
?>