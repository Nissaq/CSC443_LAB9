<?php
    setcookie ("myLoginName", "myWebsite");
    setcookie ("myPrefferedColor", "Blue");
    setcookie ("CouponNumber", "07470433", time()+60*60*24*7);
    setcookie ("CouponValue", "100.00", time()+60*60*24*7);

    print ("\n");
    print ("2 temporary cookies were delivered.\n");
    print ("2 consistent cookies were delivered.\n");

    if (isset ($_COOKIE["myLoginName"]))
    {
        $loginName = $_COOKIE["myLoginName"];
        print ("Received a cookie named as myLoginName: ".$loginName."\n");
    }
    else
    {
        print ("Did not received any cookie named as myLoginName.\n");
    }

    $count = count ($_COOKIE);
    print ("$count cookies received.\n");
    foreach ($_COOKIE as $name => $value)
    {
        print "$name = $value\n";
    }
    print ("\n");
    ?>