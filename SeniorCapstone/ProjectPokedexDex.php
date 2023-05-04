<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="ProjectPokedexStyle.css">
    <style>
        body{
          background-image:url(pexels-fwstudio-172276.jpg);
        }
    </style>
    <form class="interfaceButton">
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexHome.html';"><img src="https://www.freeiconspng.com/thumbs/pokeball-png/file-pokeball-png-0.png" style="transform:skewX(20deg);height:22px;width=22px;"></button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexDex.php';">Pokedex</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexQuizzes.php';">Pokemon Quizzes</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexWhosThat.php';">Who's That Pokemon?</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexTypeChart.html';">Type Chart</button>
      </form>
  </head>
  <body>
    <br>
        <h3 style="text-align:center;color: silver;">Choose a Type!</h3>
      <form action="ProjectPokedexDex.php" method="get" style="color: silver;">
            <input type = "radio" value = 0 name="type">No Type
            <input type = "radio" value = 1 name="type">Normal
            <input type = "radio" value = 2 name="type">Fire
            <input type = "radio" value = 3 name="type">Water
            <input type = "radio" value = 4 name="type">Grass</br>
            <input type = "radio" value = 5 name="type">Electric
            <input type = "radio" value = 6 name="type">Ice
            <input type = "radio" value = 7 name="type">Fighting
            <input type = "radio" value = 8 name="type">Poison
            <input type = "radio" value = 9 name="type">Ground
            <input type = "radio" value = 10 name="type">Flying</br>
            <input type = "radio" value = 11 name="type">Psychic
            <input type = "radio" value = 12 name="type">Bug
            <input type = "radio" value = 13 name="type">Rock
            <input type = "radio" value = 14 name="type">Ghost
            <input type = "radio" value = 15 name="type">Dark</br>
            <input type = "radio" value = 16 name="type">Dragon
            <input type = "radio" value = 17 name="type">Steel
            <input type = "radio" value = 18 name="type">Fairy</br>
            <input type="submit" name="submit" value="Submit"> 
      </form>
  <div class="dexButton">
    <br>
<?php
$type = "";

if (isset($_GET['type'])) {
  $type = $_GET['type'];
}

$servername = "localhost";
$username = "mariolip";
$password = "Pneuma423";
$dbname = "ProjectPokedex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($type == ""){
  $sql = "SELECT * FROM `pokedex`";
}
else if ($type == "0"){
  $sql = "SELECT * FROM `pokedex`";
}
else {
  $sql = "SELECT * FROM `pokedex` WHERE `TypeRefOne` = $type";
  $result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<button type='button' onclick=\"window.location.href = 'ProjectPokedex" . $row["PokemonName"] . ".php';\">
      <p>" . $row["DexNum"] . ": " . $row["PokemonName"] . "</p>
      <p style='text-align:left;'>
        <img src='https://img.pokemondb.net/sprites/scarlet-violet/normal/" . $row["refName"] . ".png' style='transform:rotate(90deg);padding:30px;padding-right:15px;width:108px;height:108px;'>
      </p>
    </button>";
    if ($count < 9){
      $count = $count + 1;
    } else {
      $count = 0;
      echo "<br></br>";
    }
  }
} else {
}
$sql = "SELECT * FROM `pokedex` WHERE `TypeRefTwo` = $type";
}

$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<button type='button' onclick=\"window.location.href = 'ProjectPokedex" . $row["PokemonName"] . ".php';\">
      <p>" . $row["DexNum"] . ": " . $row["PokemonName"] . "</p>
      <p style='text-align:left;'>
        <img src='https://img.pokemondb.net/sprites/scarlet-violet/normal/" . $row["refName"] . ".png' style='transform:rotate(90deg);padding:30px;padding-right:15px;width:108px;height:108px;'>
      </p>
    </button>";
    if ($count < 9){
      $count = $count + 1;
    } else {
      $count = 0;
      echo "<br></br>";
    }
  }
} else {
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