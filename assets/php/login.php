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
        foreach ($pdo_stm as $data)
            $_SESSION['username'] = $username;
        $_SESSION['image'] = $data['image'];
        // Redirect to user dashboard page
        // echo "$result";
        header("Location: ../../index.php");
    } else {
        echo "
        <div class='form'>
           <h3>Incorrect Username/password.</h3><br/>
           <p class='link'>Click here to <a href='../../login.html'>Login</a> again.</p>
        </div>";
    }
}


// $con = mysqli_connect("localhost","root","","TestShop");
// session_start();
// // When form submitted, check and create user session.
// if (isset($_POST['username'])) {
//     $username = stripslashes($_REQUEST['username']);    // removes backslashes
//     // $username = mysqli_real_escape_string($con, $username);
//     $password = $_REQUEST['password'];
//     // $password = mysqli_real_escape_string($con, $password);
//     // Check user is exist in the database
//     // $password=md5($password);
//     $query    = "SELECT * FROM `users` WHERE username='$username'
//                  AND password='" . md5($password) . "'";
//     $result = mysqli_query($con, $query);
//     $rows=$result->num_rows;
//     // $rows = mysqli_num_rows($result);
//     echo "$username";
//     echo "$password";
//     echo "$rows";
//     if ($rows == 1) {
//         $_SESSION['username'] = $username;
//         // Redirect to user dashboard page
//         header("Location: dashboard.php");
//     } else {
//         echo "<div class='form'>
//               <h3>Incorrect Username/password.</h3><br/>
//               <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
//               </div>";
//     }
// }
?>
<!-- </body>

</html> -->