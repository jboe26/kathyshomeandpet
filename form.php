<?php

if($_POST["message"]) {

    mail("kathyshomeandpet@gmail.com", "Price Quote",
    
    $_POST["inset your message here"]. "From: kathyshomeandpet@gmail.com");

}

?>