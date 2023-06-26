<?php
session_start();
?>
<?php
if (isset($_REQUEST['username'])) {
    $conn = new PDO("mysql:host=localhost:3306;dbname=TestShop", "root", "");
    $sql = "SELECT * FROM users WHERE username=?
            AND password=?";
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->execute([$username, $password]);
    $rows = $pdo_stm->rowCount();
    if ($rows == 1) {
        foreach ($pdo_stm as $data) {
            $_SESSION['username'] = $username;
            $_SESSION['image'] = $data['image'];
            if ($data['user_type'] == 'admin') {
                header("Location: ../../productList.php");
            } else {
                echo "
                <div class='form'>
                    <h3>Incorrect Username/password for Admin Panel.</h3><br/>
                    <p class='link'>Click here to <a href='../../loginadmin.html'>Login</a> again.</p>
                </div>";
            }
        }
    } else {
        echo "
        <div class='form'>
           <h3>Incorrect Username/password for Admin Panel.</h3><br/>
           <p class='link'>Click here to <a href='../../loginadmin.php'>Login</a> again.</p>
        </div>";
    }
}
?>