<?php

$browser_username=$_POST["username"];
$browser_password=$_POST["password"];
setcookie("browser_username", "$browser_username", time() + 3600);
setcookie("browser_password", "$browser_password", time() + 3600);

include "dbconfig.php";


$con = mysqli_connect($host, $username, $password, $dbname)
      or die("<br>Cannot connect to DB:$dbname on $host. Error: " . mysqli_connect_error());


$sql = "select mid, cid, c.name, login, password, code, type, cid, amount, mydatetime, note, s.name as Source, TIMESTAMPDIFF(YEAR, c.DOB, NOW()) as age, concat(street,' ', city,' ',state,' ',zipcode) as Address, img from CPS3740_2022F.Money_amaron m, CPS3740.Sources s, CPS3740.Customers c where s.id=m.Source and c.id=m.cid";


$query = "Select * from CPS3740.Customers where login = '$browser_username'"; 

$query2 = "Select * from CPS3740.Customers where login = '$browser_username' and password = '$browser_password'"; 
  
  $result2 = mysqli_query($con,$query);
  $result3 = mysqli_query($con,$query2);

  if(mysqli_num_rows($result2)==0){

   echo "<br> Login ". $browser_username ." doesn’t exist in the database </br>";
         echo "<html>";
         echo "<a href = index.html target=_blank> Home page</a>";
         echo "</html>";
         }
   elseif (mysqli_num_rows($result3)==0) {
      echo "<br> login ". $browser_username ." exists, but password not matches. </br>";
         echo "<html>";
         echo "<a href = index.html target=_blank> Home page</a>";
         echo "</html>";

   }

else{

$result = mysqli_query($con, $sql);
//echo mysqli_num_rows($result);
//$row_cnt = $result->num_rows;

  


   if ($result) {

   echo "<html>";
      echo "<a href='logout.php'>User logout</a><br>";
      echo "</html>";         




      echo "<TABLE border=1>";
      echo "<TR>
      <TH>ID</TH>
      <TH>Code</TH>
      <TH>Type</TH>
      <TH>Amount</TH>
      <TH>Source</TH>
      <TH>Date Time</TH>
      <TH>Note</TH>
      </TR>";

      $Rows = mysqli_num_rows($result);

         

      while($row = mysqli_fetch_array($result)){
         $login = $row["login"];
         $Password = $row["password"];
         $mid = $row["mid"];
         $cid = $row["cid"];
         $code = $row["code"];
         $type = $row["type"];
         $amount = $row["amount"];
         $Source = $row["Source"];
         $mydatetime = $row["mydatetime"];
         $note= $row["note"];
         
         setcookie("cid", "$cid", time() + 3600);

         if ($type =="W"){      
           $type="Withdraw";
            $color="red";
         }
         else{
           $type="Deposit";
            $color="blue";
         }

         echo "<TR>
         <TD>$mid</TD>
         <TD>$code</TD>
         <TD>$type</TD>
         <TD><font color='$color'>$amount</TD>
         <TD>$Source</TD>
         <TD>$mydatetime</TD>
         <TD>$note</TD>
         </TR>";

      }

      echo "<br> Username: $browser_username\n";
      echo "<br> Password: $browser_password\n";

      $ip = $_SERVER['REMOTE_ADDR'];

      $browser = $_SERVER['HTTP_USER_AGENT'];
      echo "<br> browser: $browser\n";



      $IPv4= explode(".",$ip);
      echo "<br> IP: $ip\n";

      if (($IPv4[0] =='10') || ($IPv4[1] == '130.125')) {
         echo"<br>You are from Kean university.\n";
         echo "<br> \n";
      }

      else {
         echo "<br>You are NOT from Kean university.\n";
         echo "<br> \n";
      }
      $query3 = "Select TIMESTAMPDIFF(YEAR, DOB, NOW()) as age, concat(street,' ', city,' ',state,' ',zipcode) as Address, name, img from CPS3740.Customers where login = '$browser_username' and password = '$browser_password'";

      $result4 = mysqli_query($con, $query3);
      while($row = mysqli_fetch_array($result4)){

         $age= $row["age"];
         $img= $row["img"];
         $Address= $row["Address"];
         $name= $row["name"];
      }
      echo "<br>Welcome Customer $name\n";
      echo "<br> age: $age\n";
      echo "<br> Address: $Address\n";
      echo "<br> \n";
      echo "<img src='data:image/jpeg;base64," .base64_encode( $img ) ."'/>\n";


      echo "</TABLE>\n";

      echo '<form action="add_transaction.php" method="post">';
      echo '<input type="submit" value="Add transaction">';
      echo '</form>';
      echo "<br> \n";

      echo "<html>";
      echo "<a href = display_transaction.php target=_blank> Display and update transaction</a>";
      echo "</html>";
      echo "<br> \n";

      echo "<html>";
      echo "<a href = display_stores.php target=_blank> Display stores</a>";
      echo "</html>";
      echo "<br> \n";

      echo "Keywords ";
      $keywords="";
      echo '<form action="search.php" method="get">';
      echo '<input type="text" name="keywords" value="'.$keywords.'">';
      echo '<input type="submit" value="Search transaction">';
      echo '</form>';

   }
}
?>