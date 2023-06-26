<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con;
    $pdo_stm;
    try{
        $conn = new PDO("mysql:host=localhost:3306;dbname=TestShop","root","");
        $conn->query("SET NAMES UTF8");//thiết lập chế độ unicode
    }catch(PDOException $ex)
    {
        echo "<p>" . $ex->getMessage() . "</p>";
        die('<h3>LỖI KÊT NỐI CSDL</h3>');
    }

?>