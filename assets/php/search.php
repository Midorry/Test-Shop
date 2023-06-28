<?php
session_start();
if (isset($_REQUEST['search'])) {

    $name_prod = $_REQUEST['pname'];
    $_SESSION['name_prod'] = $name_prod;
    // echo $_SESSION['name_prod'];
    header("Location: ../../index.php");
    exit;
} else {
    echo "Please enter a name";
}
