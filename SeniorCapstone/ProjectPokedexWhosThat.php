<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="ProjectPokedexStyle.css">
        <style>
           body{
            color: silver;
            background-image:url(pexels-fwstudio-172276.jpg);
          }
        </style>
    </head>
  <header>
  <form class="interfaceButton">
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexHome.html';"><img src="https://www.freeiconspng.com/thumbs/pokeball-png/file-pokeball-png-0.png" style="transform:skewX(20deg);height:22px;width=22px;"></button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexDex.php';">Pokedex</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexQuizzes.php';">Pokemon Quizzes</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexWhosThat.php';">Who's That Pokemon?</button>
      <button type="button" class="inferfaceButtonContent" onclick="window.location.href = 'ProjectPokedexTypeChart.html';">Type Chart</button>
        </form>
  </header>
  <body>
  </br>
        <?php
    $points = 0;
    if (isset($_GET['score'])) {
      $points = (int)$_GET['score'];
    }
    if ($points >= 1 && $points <= 500) {
        echo "<p style='text-align:center;'>Your WTP rank is Rookie!</p>";
    }
    else if ($points >= 501 && $points <= 1000) {
        echo "<p style='text-align:center;'>Your WTP rank is Trainer!</p>";
    }
    else if ($points >= 1001 && $points <= 1500) {
        echo "<p style='text-align:center;'>Your WTP rank is Ace!</p>";
    }
    else if ($points == 0){
      echo "<p style='text-align:center;'>You did not take the quiz</p>";
    }
    else{
        echo "<p style='text-align:center;'>Invalid score please enter the correct score</p>";
    }
    ?>
        <form action="ProjectPokedexWhosThat.php" method="get">
    <label for="score">What was your score?</label>
    <input type = "text" id="score"  name="score"></br>
      <input type="submit" name="submit" value="Submit">
        </form>
    </br>
    <div id="ff-compose"></div>
<script async defer src="https://formfacade.com/include/101422900382772449198/form/1FAIpQLSefK-5wevtkbA046a3fdnHIvhKl73bfFMGqoSQhhv_xC3wwkA/classic.js?div=ff-compose"></script>
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