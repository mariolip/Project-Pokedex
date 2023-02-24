<?php
$servername = "localhost";
$username = "mariolip";
$password = "Pneuma423";
$dbname = "pokemondatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully. </br>";

$sql = "SELECT * FROM pokedex";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@500&display=swap');
      body {
        font-family: "Asap Condensed", Trebuchet MS, sans-serif!important;
        background-image: linear-gradient(135deg, #231449, rgb(9, 9, 155));
        font-weight: 500;
        font-size: 18pt;
        letter-spacing: 0.3px;
        margin-top: 0px;
        padding-right: 50px;
        padding-top: 2px;
        white-space: nowrap;
        width: 168px;
        height: 38px;
        background-size: cover;
        box-shadow: black;
        transform-origin: top left;
        transform: scale(0.8) translate(231px,10px);
        z-index: 2;
      }
      .interfaceButton button {
        color: #222224;
        background-color: #f00000;
        text-align: center;
        text-transform: uppercase;
        padding: 10px;
        margin: 10px;
        display: inline-block;
        margin: 0;
        transform: skewX(-20deg);
      }
      
      .interfaceButton button:hover{
        color:black;
        background-color: #f00000;
        background-image: linear-gradient(110deg, darkred, red, darkred);
      }
      .inferfaceButtonContent{
        font-family: "Asap Condensed", Trebuchet MS, sans-serif!important;
        background-color: #f00000;
        color: #222224;
        border-color: #222224;
        font-weight: 500;
        font-size: 18pt; 
        text-align: center;
        text-transform: uppercase;
        padding: 5px 10px;
        margin: 10px;
        display: inline-block;
        margin: 0;
        transform: skewX(20deg);
      }
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
img.imgSize {
  width: 100%;
  height: 100%;
  border-radius: 50%;
}
* {
    margin:0;
    padding:0;
}
.dexButton button {
  background-color: #ad8351;
  color: #222224;
  border-color: #6e5334;
  border-width: 4px;
  cursor:grab;
  width: 44px;
  height: 180px;
  display: inline;
  border-radius: 10%;
  border-top: none;
  border-bottom: none;
  padding-top: 15px;
  padding-right: 2px;
}
.dexButton p{
  font-family: "Asap Condensed", Trebuchet MS, sans-serif!important;
	font-weight: 500;
  font-size: 14pt;
  text-align: left;
  text-indent: -55px;
  transform:rotate(-90deg);
    }
.dexButton button:hover {
  background-color: #af6f48;
  border-color: #473622;
  cursor: grab;
}
.dexButton button:active{
}
form {text-align: center;}

</style>
  <head>
    <div class="interfaceButton">
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexDex.html';"><img src="https://www.freeiconspng.com/thumbs/pokeball-png/file-pokeball-png-0.png" style="transform:skewX(20deg);height:22px;width=22px;"></button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexLogIn.html';">Log In</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexQuizzes.html';">Pokémon Quizzes</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexWhosThat.html';">Who's That Pokémon?</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexLeaderboards.html';">Leaderboards</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexTypeChart.html';">Type Chart</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexCreatorCredits.html';">About the Creators</button>
      <!--
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'https://pokemonshowdown.com';">Pokémon Showdown</button>
      -->
    </div>
  </head>
  <body>
  <div class="dexButton">
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>";
    echo "Dex Number: " . $row["DexNum"]."<br>";
    echo "Name: " . $row["PokemonName"]."<br>";
    echo "Primary Type: " . $row["TypeOne"]."<br>";
    echo "Secondary Type: " . $row["TypeTwo"]."<br>";
    echo "HP: " . $row["HP"]."<br>";
    echo "Attack: " . $row["Attack"]."<br>";
    echo "Defense: " . $row["Defense"]."<br>";
    echo "Special Attack: " . $row["Sp. Attack"]."<br>";
    echo "Special Defense: " . $row["Sp. Def"]."<br>";
    echo "Speed: " . $row["Speed"]."<br>";
    echo "<button type='button' onclick=\"window.location.href = 'https://pokemondb.net/pokedex/" . $row["refName"] . "';\"><p>" . $row["DexNum"] . ": " . $row["PokemonName"] . "</p><p style='text-align:left;'><img src='https://img.pokemondb.net/sprites/scarlet-violet/normal/" . $row["refName"] . ".png' style='transform:rotate(90deg);padding:10px;padding-right:5px;width:36px;height:36px;'></p></button></br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>