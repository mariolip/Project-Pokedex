<?php
$browser_uname=$_POST["uname"];
$browser_psw=$_POST["psw"];
setcookie("browser_uname", "$browser_uname", time() + 3600);
setcookie("browser_psw", "$browser_psw", time() + 3600);

echo "<br> Welcome ". $browser_uname ." to Project Pokedex! </br>";
echo "<br> Your password is ". $browser_psw .". </br>";

?>