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
    $var1=$_POST["text1"];
    $var2=$_POST["text2"];
    $var3=$_POST["age"];
    $sql="INSERT INTO studentnew1(name,address,age)
    VALUES('$var1','$var2','$var3')";
    if($conn->query($sql)===TRUE)
    {
        echo "Data added successfully";
    }
    else
    {
        echo "Failed to add data";
    }
    $sql="DELETE FROM studentnew1";
    $conn->query($sql);
    echo "ALL DELETED";
    $conn->close();
?>