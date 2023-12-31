<?php
    $conn1=new mysqli("sql313.epizy.com","epiz_25268124","BOKNHAfebZE4k0","epiz_25268124_chat");

    $sql="SELECT * FROM chat";
    $result=$conn1->query($sql);
    while($row=$result->fetch_assoc())
    {
        echo $row["text"]."<br>";
    }
    $conn1->close();
?>