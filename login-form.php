<?
session_name("Login");
session_start();
session_destroy();

if($_GET['login'] == "failed") {
print $_GET['cause'];
}
?>
<form name="login_form" method="post" action="log.php?action=login">
Login: <input type="text" name="user"><BR>
Password: <input type="password" name="pwd"><BR>
<input type="submit">
</form>
