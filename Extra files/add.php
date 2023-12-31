<?php
    $conn=new mysqli("sql313.epizy.com","epiz_25268124","BOKNHAfebZE4k0","epiz_25268124_newDB");
    if($conn->connect_error)
    {
        echo "Failed to connect";
    }
    else
    {
        echo "Connected successfully !";
    }
    echo "<br>";
    $sql="INSERT INTO studentnew1(name,address,age)
    VALUES('Joe Brar','Ridhi Sidhi',18)";
    if($conn->query($sql)===TRUE)
    {
        echo "Data added successfully";
    }
    else
    {
        echo "Failed to add data";
    }
    $conn->close();
?>