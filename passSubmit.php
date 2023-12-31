<?php
    $password=$_GET["q"];
    $var1=$_GET["n"];
    $var2=$_GET["e"];
    $conn=new mysqli("sql313.epizy.com","epiz_25268124","BOKNHAfebZE4k0","epiz_25268124_chat");
    if($var1)
    {
        $sql="INSERT INTO Pass_Info(Password)
        VALUES('".$password."')";
        if($conn->query($sql)===true)
        {
            echo "New Chat Created. Remember Your Password.";
            $sno=$conn->insert_id;
            $sql2="CREATE TABLE chat".$sno."(
                chat VARCHAR(10000)
                )";
        }
        else
        {
            echo "Password already taken or invalid password.";
        }
    }
    if($var2)
    {
        
    }
    /*$sql="INSERT INTO chat1(testrow)
        VALUES(5)";*/
    $conn->close();
?>