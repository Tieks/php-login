<?
session_name("Login");
session_start();

require("connect.php");

if(mysql_num_rows($q_user) == 1) {

$query = mysql_query("SELECT * FROM USERS WHERE login='$name'");
$data = mysql_fetch_array($query);
if($_POST['pwd'] == $data['password']) { 
session_register("name");
header("Location: index.php"); // success page. put the URL you want 
exit;
} else {
header("Location: login.php?login=failed&cause=".urlencode('Invalid Username or Password'));
exit;
}
} else {
header("Location: login.php?login=failed&cause=".urlencode('Invalid Username or Password'));
exit;
}
}

// if the session is not registered
if(session_is_registered("name") == false) {
header("Location: login.php");
}
?>
