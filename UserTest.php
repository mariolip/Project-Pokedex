<?php
$browser_uname=$_POST["uname"];
$browser_psw=$_POST["psw"];
$make=$_POST["make"];
setcookie("browser_uname", "$browser_uname", time() + 3600);
setcookie("browser_psw", "$browser_psw", time() + 3600);
$sql = "SELECT `uname`,`psw` FROM pokemonQuiz where uname = $browser_uname";
if($make=true){
if ($sql=false) {
    echo "<br> Welcome ". $browser_uname ." to Project Pokedex! </br>";
    echo "<br> Your password is ". $browser_psw .". </br>";
    $browser_totalpoints=0;
    $browser_addpoints=0;
    $browser_rank= ;
    echo "<br> Your rank is ". $browser_rank ."! </br>";
    setcookie("browser_rank", "$browser_rank", time() + 3600);
    setcookie("browser_totalpoints", "$browser_totalpoints", time() + 3600);
    setcookie("browser_addpoints", "$browser_addpoints", time() + 3600);
}
else {
    echo "<br> This user already exists please make a new username or login if you already have an account <br/> "
}
}
else{
    echo "<br> Welcome back ". $browser_uname ." to Project Pokedex! </br>";
    echo "<br> Your rank is ". $browser_rank ."! </br>";   
}
?>