<?php
$browser_uname=$_COOKIE["browser_uname"];
$browser_psw=$_COOKIE["browser_psw"];
$browser_totalpoints=$_COOKIE["browser_totalpoints"];
$browser_rank=$_COOKIE["browser_rank"];

foreach ($_POST as $key => $value){
    if(substr($key,0,6) == 'optio'){
      $id = intval(substr($key,6));
      $answers[$id] = $value;
    }
  }
  var_export($answers);

echo"Finish!"

echo "<br> Well done ". $browser_uname ."</br>";
echo "<br> You have earned ". $browser_addpoints ." points! </br>";
$browser_totalpoints= $browser_totalpoints+$browser_addpoints;
if ($browser_totalpoints=){
    $browser_rank= ;
}
elseif ($browser_totalpoints=) {
    $browser_rank= ;
} elseif ($browser_totalpoints=) {
    $browser_rank= ;
}
$browser_addpoints=0;
echo "<br> Rank ". $browser_rank ."! </br>";

setcookie("browser_rank", "$browser_rank", time() + 3600);
setcookie("browser_totalpoints", "$browser_totalpoints", time() + 3600);
setcookie("browser_addpoints", "$browser_addpoints", time() + 3600);
?>