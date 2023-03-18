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

$sql = "SELECT * FROM pokedex";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="ProjectPokedexStyle.css">
</head>
    <div class="interfaceButton">
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexHome.html';"><img src="https://www.freeiconspng.com/thumbs/pokeball-png/file-pokeball-png-0.png" style="transform:skewX(20deg);height:22px;width=22px;"></button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexDex.php';">Pokedex</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexLogIn.html';">Log In</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexQuizzes.html';">Pokemon Quizzes</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexWhosThat.html';">Who's That Pokemon?</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexLeaderboards.html';">Leaderboards</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexTypeChart.html';">Type Chart</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexCreatorCredits.html';">About the Creators</button>
    </div>
  </head>
  <body>
  <div class="dexButton">
    <br>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<button type='button' onclick=\"window.location.href = 'https://pokemondb.net/pokedex/" . $row["refName"] . "';\"><p>" . $row["DexNum"] . ": " . $row["PokemonName"] . "</p><p style='text-align:left;'><img src='https://img.pokemondb.net/sprites/scarlet-violet/normal/" . $row["refName"] . ".png' style='transform:rotate(90deg);padding:30px;padding-right:15px;width:108px;height:108px;'></p></button>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
</body>
<footer style="transform: translateX(10px)">
    <p>Note: Project Pokedex is NOT a comphresive website with every bit of Pokemon information.  This website is intended to make getting into the series easier</p>
    <p>in a fun and interactive way with a Pokedex in similar style that found in Pokemon Scarlet and Pokemon Violet.</p>
    <p>All content relating to Pokemon is owned by the Pokemon Company.</p>
    <p>Please support the official release of Pokemon!</p>
    <h3>If you want a more in depth look into the world of Pokemon, take a look at the links below!</h3>
    <div class="interfaceButton">
      <a href="https://www.pokemon.com/us" button type="button" class="inferfaceButtonContent">Official Pokemon Website</a>
      <a href="https://bulbapedia.bulbagarden.net/wiki/Main_Page" button type="button" class="inferfaceButtonContent">Bulbapedia</a>
      <a href="https://www.serebii.net/index2.shtml" button type="button" class="inferfaceButtonContent">Serebii</a>
    </div>
    <br></br>
  </footer>
  </html>