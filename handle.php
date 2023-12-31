<?php
$newFilePath = "Uploads/" . $_FILES['myfile']['name'];

if (move_uploaded_file($_FILES['myfile']['tmp_name'], $newFilePath))
{
    echo "Success.\n";
} 
else 
{
    echo "Failure.\n";
}
?>