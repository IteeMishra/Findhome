<?php

// start the session
session_start();


// destroy the session.
if(session_destroy()){


    // redirect to the login page
    header("Location: index.php");
    exit;
}



?>