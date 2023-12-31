<?php
    $conn=new mysqli("sql313.epizy.com","epiz_25268124","BOKNHAfebZE4k0","epiz_25268124_chat");
    $sql="CREATE TABLE Pass_Info(
    Sno INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Password VARCHAR(30) UNIQUE
    )";
    /*$sql="DELETE FROM Pass_Info
    WHERE Sno=6";*/
    if($conn->query($sql)===true)
    {
        echo "Success";
    }
    else
    {
        echo "Failureee";
    }

    $conn->close();
?>