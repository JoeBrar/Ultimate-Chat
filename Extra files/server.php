<?php
    $conn=new mysqli("sql313.epizy.com","epiz_25268124","BOKNHAfebZE4k0","epiz_25268124_newDB");
    if($conn->connect_error)
    {
        echo "Failed to connect";
    }
    else
    {
        echo "Connected successfully";
    }
    echo "<br>";
    $sql="CREATE TABLE newstudent1(
        name varchar(100),
        address varchar(100),
        age int(10)
        );";
    if($conn->query($sql)===TRUE)
    {
        echo "Table : studentnew1 created successfully !";
    }    
    else
    {
        echo "Table creation failed ";
    }
    $conn->close();
?>