<!--
   CREATE TABLE crud1 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL UNIQUE,
    phone VARCHAR (15) NOT NULL,
    join_date DATE NOT NULL
   );

   INSERT INTO crud1 (id,name,email,phone,join_date)
VALUES ('101',Chinmoy Sarker', 'chinmoysr117@gmail.com', '01643844549', '2025-04-09' );

 INSERT INTO crud1 (id,name,email,phone,join_date)
VALUES ('102',Chandan Sarker', 'chandansarker1967@gmail.com', '01681908548', '2025-04-09' );

-->

<?php
  $servername = "localhost";
     $username="root";
     $password="";
     $db_name="crud";
     $conn = new mysqli ($servername,$username,$password,$db_name);

     if ($conn->connect_error){
      die("Connection failed:" .$conn->connect_error);
     }

     echo " Connection Finally Successful";
     
     ?>
