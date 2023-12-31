<?php
    $q=$_GET["q"];
    echo $q;
    $conn=new mysqli("sql313.epizy.com","epiz_25268124","BOKNHAfebZE4k0","epiz_25268124_chat");
    if($conn->connect_error)
    {
        echo "Failed to connect";
    }
    else
    {
        echo "Connected successfully !";
    }
    $sql="INSERT INTO chat(text)
    VALUES('$q')";
    if($conn->query($sql)===TRUE)
    {
        echo "Data added successfully ";
    }
    else
    {
        echo "Failed ";
    }
    $conn->close();
?>