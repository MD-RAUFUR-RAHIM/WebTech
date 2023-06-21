
<?php
$cookie_name = "fname";
$cookie_value = "1"; 
$cookie_pass="password";
$cookie_value="2";
setcookie($cookie_name, $cookie_value, time() + (60*60*24* 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>


