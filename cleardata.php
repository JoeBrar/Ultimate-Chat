<?php
    $conn=new mysqli("sql313.epizy.com","epiz_25268124","BOKNHAfebZE4k0","epiz_25268124_chat");
    $sql="DELETE FROM chat";
    $conn->query($sql);
    echo "Chat Cleared !";
    $conn->close();
?>