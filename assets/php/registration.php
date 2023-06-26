<?php
session_start();
require_once('clsDatabase.php');
class Register extends clsDatabase
{
    public $data;
    function __construct()
    {
        parent::__construct();
    }
    function register($username, $email, $password, $create_datetime, $image)
    {
        $sql = "Insert into `users` (username, email, password, create_datetime, image) values(?,?,?,?,?)";
        $param = [$username, $email, $password, $create_datetime, $image];
        $result = $this->RunSQL($sql, $param); //goi ham thuc thi SQL ke thua tu clsDatabase
        return $result;
    }
}
?>
<?php
if (isset($_REQUEST['username'])) {

    $username = $_REQUEST['username'];
    $email    = stripslashes($_REQUEST['email']);
    $password = stripslashes($_REQUEST['password']);
    $create_datetime = date("Y-m-d H:i:s");
    $image = $_REQUEST['image'];
    $account = new Register;
    $result = $account->register($username, $email, $password, $create_datetime, $image);
    $_SESSION['image'] = $image;
    $_SESSION['username'] = $username;
    header("Location: ../../login.php");
    exit;
}
?>