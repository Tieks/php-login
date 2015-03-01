<?
session_name("Login");
session_start();
session_destroy();

if($_GET['login'] == "failed") {
print $_GET['cause'];
}
?>
