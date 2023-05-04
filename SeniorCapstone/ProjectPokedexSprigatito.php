<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="ProjectPokedexStyle.css">
</head>
<form class="interfaceButton">
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexHome.html';"><img src="https://www.freeiconspng.com/thumbs/pokeball-png/file-pokeball-png-0.png" style="transform:skewX(20deg);height:22px;width=22px;"></button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexDex.php';">Pokedex</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexQuizzes.php';">Pokemon Quizzes</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexWhosThat.php';">Who's That Pokemon?</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexTypeChart.html';">Type Chart</button>
</form>
  </head>
  <body>
  <style>
        body{
          background-image:url(https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77702096178.jpg);
        }
    </style>
<?php
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

$sql = "SELECT * FROM pokedex";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row["DexNum"] == 1){
    echo "<h1 style='text-align:center;'>" . $row['PokemonName'] . "</h1>";
    echo "<h2 style='text-align:center;'>The " . $row['Species'] . "</h2>";
    echo "<img style='display: block;margin-left: auto;margin-right: auto;' src='https://img.pokemondb.net/sprites/scarlet-violet/normal/" . $row["refName"] . ".png' style='width:600px;height:600px;'></br>";
    echo "<h3 style='text-align:center;'>Type: " . $row["TypeOne"];
    if ($row["TypeTwo"] != "N/A"){
        echo " & " . $row["TypeTwo"] . "</h3>";
    }
    else {
        echo "</h3>";
    }
    if ($row["AbilityTwo"] != "N/A"){
      echo "<h3 style='text-align:center;'>Abilities: " . $row["AbilityOne"] . " & " . $row["AbilityTwo"] . "</h3>";
    }
    else {
      echo "<h3 style='text-align:center;'>Ability: " . $row["AbilityOne"] . "</h3>";
    }
    echo "<h3 style='text-align:center;'>Hidden Ability: " . $row["AbilityHidden"] . "</h3>"; 
    echo "<p style='text-align:center;'>" . $row["DexEntryS"] . "</>";
    echo "<p style='text-align:center;'>" . $row["DexEntryV"] . "</br>";
    echo "<h3 style='text-align:center;'>Stats</h3>";
    echo "<div style='align:center;'>";
    echo "<table style='margin: 0px auto;>'";
    echo "<tr>";
    echo "<td>HP: </td>";
    echo "<td>" . $row['HP'] . "</td>"; 
    echo "<td><img src='StatBar.jpg'style='height:16px;width:" . $row['HP']*2 . "px;'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Attack: </td>";
    echo "<td>" . $row['Attack'] . "</td>"; 
    echo "<td><img src='StatBar.jpg'style='height:16px;width:" . $row['Attack']*2 . "px;'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Defense: </td>";
    echo "<td>" . $row['Defense'] . "</td>"; 
    echo "<td><img src='StatBar.jpg'style='height:16px;width:" . $row['Defense']*2 . "px;'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Sp. Atk: </td>";
    echo "<td>" . $row['Sp. Atk'] . "</td>"; 
    echo "<td><img src='StatBar.jpg'style='height:16px;width:" . $row['Sp. Atk']*2 . "px;'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Sp. Def: </td>";
    echo "<td>" . $row['Sp. Def'] . "</td>"; 
    echo "<td><img src='StatBar.jpg'style='height:16px;width:" . $row['Sp. Def']*2 . "px;'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Speed: </td>";
    echo "<td>" . $row['Speed'] . "</td>"; 
    echo "<td><img src='StatBar.jpg'style='height:16px;width:" . $row['Speed']*2 . "px;'></td>";
    echo "</tr>";
    echo "</table>";
    echo "</br>";
    echo "<p style = text-align:center;> Height: " . $row["Height"] . "</p>";
    echo "<p style = text-align:center;>Weight: " . $row["Weight"] . "</p>";
    echo "</br>";
    }
} 
} else {
  echo "0 results";
}
$conn->close();
?>

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