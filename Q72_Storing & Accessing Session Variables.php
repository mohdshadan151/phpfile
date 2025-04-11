<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "shadan";
    $_SESSION["lastname"] = "mohd ";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"];
    echo"<br>This code is executed by mohd shadan!";
 
?>