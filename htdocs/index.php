<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
// Create database
$sql = "CREATE DATABASE creditcard";
if ($conn->query($sql) === TRUE) {
   // echo "Database created successfully";
} else {
    //echo "Error creating database: " . $conn->error;
}
$conn->close(); 
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "creditcard";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE `card` ( 
    `#` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
    `ccnum` varchar(255)NOT NULL,  
    `expdate` date NOT NULL,   
    `seccode` int(11) NOT NULL 
) 
ENGINE=InnoDB DEFAULT CHARSET=latin1; ";

if ($conn->query($sql) === TRUE) {
    //echo "Table card created successfully";
} else {
    //echo "Error creating table: " . $conn->error;
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "creditcard";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//button function

        if(array_key_exists('pbtn', $_POST)) { 
          $card = $_REQUEST['cardnum'];
            $cvv = $_REQUEST['cvv'];
            $month = $_POST['Month'];
            $year = $_POST['Year'];
            $date= $year."-".$month."-01";
            button1($card,$date,$cvv);
        } 
        
        function button1($card,$date,$cvv) { 
            $servername = "localhost";
$username = "root";
$password = "";
$dbname = "creditcard";
          
            $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
            $sql="INSERT INTO `card` (`ccnum`, `expdate`, `seccode`) 
            VALUES ( $card, '$date', $cvv)";
          if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
              
} 
            else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
        } 
$conn->close();
?>



<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <title>Credit Card Information Input</title>
        <link rel='stylesheet' href='css/maincsspage.css' type='text/css' />       
    </head>
    <body>
    <form class="CardInfo" method="post" action="index.php" target="hiddenform">
  <div class="form-header">
    <h4 class="title">Credit Card Details</h4>
        </div>
 
  <div class="form-body">
      <!-- Accepted Cards -->
      <label>Accepted Cards:</label>
      <div class ="card-icons">
          <img src="image/visa.png" class="v" alt ="Visa Card Logo" style="max-height:30px;""max-width:30px;">
          <img src="image/mastercard.png" class="m" alt ="Master Card Logo"style="max-height:30px;""max-width:30px;">
          <img src="image/americanexpress.png" class="ae" alt ="American Express Logo"style="max-height:30px;""max-width:30px;">
          <img src="image/discover.png" class="d" alt ="Discover Card Logo"style="max-height:30px;""max-width:30px;">
      </div>
    <!-- Card Number -->
    <input  type="text" class="card-number" placeholder="Card Number" id="cardnuma" name="cardnum" autocomplete="off" onkeyup="checkcardnum(cardnum)">
 
    <!-- Date Field -->
    <div class="date-field">
      <div class="month">
        <select class=mmonth name="Month" onchange="checkdate(Month.value,Year.value)">
          <option value="01">January</option>
          <option value="02">February</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
      </div>
      <div class="year">
        <select class=yyear name="Year" onchange="checkdate(Month.value,Year.value)">
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
        </select>
      </div>
    </div>
 
    <!-- Card Verification Field -->
    <div class="card-verification">
      <div class="cvv-input">
        <input type="text" placeholder="CVV" id="cvva" class="cvvinput" name="cvv" maxlength="3" autocomplete="off" onkeyup="checkcvv(cvv)">
      </div>
      <div class="cvv-details">
        <p>3 digits usually found <br> on the signature strip</p>
      </div>
    </div>
 
    <!-- Buttons -->
      <button class="proceedbtna" type="submit" name="pbtn" >Proceed</button>
      <button class="hiddenbtn" name="pbtna" style="display:none"onclick="window.location.href='secondpage.php';" >a</button>
  </div>
</form>
        <IFRAME style="display:none" name="hiddenform"></IFRAME>
        <script src="js/mainjspage.js"></script>
        
    </body> 
</html> 
