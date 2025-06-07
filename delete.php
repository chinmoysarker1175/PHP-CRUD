<?php
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM `crud1` WHERE id=$id";
    $conn->query($sql);
}
header('"D:\XAMPP\htdocs\CRUD_Lab_Report_1175\index.php"');
exit;
?>
