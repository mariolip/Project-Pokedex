<?php
$browser_rank=$_COOKIE["browser_rank"];
if ($browser_rank = ) {
    echo "Who's That Pokemon!"
    $sql = "SELECT `id`,`question`,`a`,`b`,`c`,`d` FROM pokemonQuiz where difficulty = ORDER BY rand() limit 5";   
    mysql_query($sql);
    echo '<form action="Finish.php" method="post"><div>';
    while($data = mysql_fetch_array($result,MYSQL_NUM)){
     echo <<<EOF
    <table><tr><td>$data[1]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="a">$data[2]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="b">$data[3]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="c">$data[4]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="d">$data[5]</td></tr></table>
    EOF;
    }
    echo '<input type="submit" value="Submit" /></div></form>';
}
elseif ($browser_rank = ) {
    echo "Who's That Pokemon!"
    $sql = "SELECT `id`,`question`,`a`,`b`,`c`,`d` FROM pokemonQuiz where difficulty =  ORDER BY rand() limit 5";   
    mysql_query($sql);
    echo '<form action="Finish.php" method="post"><div>';
    while($data = mysql_fetch_array($result,MYSQL_NUM)){
     echo <<<EOF
    <table><tr><td>$data[1]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="a">$data[2]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="b">$data[3]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="c">$data[4]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="d">$data[5]</td></tr></table>
    EOF;
    }
    echo '<input type="submit" value="Submit" /></div></form>';
}
else {
    echo "Who's That Pokemon!"
    $sql = "SELECT `id`,`question`,`a`,`b`,`c`,`d` FROM pokemonQuiz ORDER BY rand() limit 5";   
    mysql_query($sql);
    echo '<form action="Finish.php" method="post"><div>';
    while($data = mysql_fetch_array($result,MYSQL_NUM)){
     echo <<<EOF
    <table><tr><td>$data[1]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="a">$data[2]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="b">$data[3]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="c">$data[4]</td></tr>
    <tr><td><input type="radio" name="option$data[0]" value="d">$data[5]</td></tr></table>
    EOF;
    }
    echo '<input type="submit" value="Submit" /></div></form>';
}
?>