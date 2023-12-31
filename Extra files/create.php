<?php
    $conn=new mysqli("sql313.epizy.com","epiz_25268124","BOKNHAfebZE4k0","epiz_25268124_chat");
    if($conn->connect_error)
    {
        echo "Failed to connect";
    }
    else
    {
        echo "Connected successfully";
    }
    echo "<br>";
    $sql="CREATE TABLE chat(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        text varchar(1000)
        );";
    if($conn->query($sql)===TRUE)
    {
        echo "Table : chat created successfully !";
    }    
    else
    {
        echo "Table creation failed ";
    }
    $conn->close();
?>