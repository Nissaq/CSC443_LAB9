<?php
    session_start();
    echo "<html>";

    $queryString = $_SERVER["QUERY_STRING"];
    echo "Query string of the incoming URL: ".$queryString."\n";

    echo "Cookies received:\n";
    foreach ($_COOKIE as $name => $value)
    {
        echo "$name = $value\n";
    }

    //$sid = session_id();
    // echo "Session ID returned by session_id(): ".$sid."\n <br>";
    // $sid = SID;
    // echo "Session ID returned by SID: ".$sid."\n <br>";

    $myLogin = $_SESSION["myLogin"];
    echo "Value of myLogin has been retrieved: ".$myLogin."\n <br>";
    
    $myColor = $_SESSION["myColor"];
    echo "Value of myColor has been retrieved: ".$myColor."\n <br>";

    echo "</html>\n";
?>