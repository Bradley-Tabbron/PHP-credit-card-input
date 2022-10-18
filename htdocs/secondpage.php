

<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <title>Credit Card Information Input</title>
        <link rel='stylesheet' href='css/maincsspage.css' type='text/css' />  
    </head>
    <body>
    <form  class="CardInfo">
  <div class="form-header">
    <h4 class="title"> Your Credit Card Details:</h4>
        </div>
 
  <div class="form-body">
      <!-- Accepted Cards -->
       <div class ="card-icons">
          <img src="image/visa.png" class="v" alt ="Visa Card Logo" style="max-height:30px;""max-width:30px;">
          <img src="image/mastercard.png" class="m" alt ="Master Card Logo"style="max-height:30px;""max-width:30px;">
          <img src="image/americanexpress.png" class="ae" alt ="American Express Logo"style="max-height:30px;""max-width:30px;">
          <img src="image/discover.png" class="d" alt ="Discover Card Logo"style="max-height:30px;""max-width:30px;">
      </div>
      <div class ="userdetails">
Your Credit Card:   <?php
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
$sql = "SELECT * FROM card";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
    
    while($row = $result2->fetch_assoc()) {
        $finalccnum=$row['ccnum'];
    }
    echo "************".substr($finalccnum,-4);
} else {
    echo "0 results";
}
$conn->close();
?>
   <script type='text/javascript'>

(function()
{
  if( window.localStorage )
  {
    if( !localStorage.getItem('firstLoad') )
    {
      localStorage['firstLoad'] = true;
      window.location.reload();
    }  
    else
      localStorage.removeItem('firstLoad');
  }
})();

</script>     
         
      </div>
    <!-- Card Number -->
 
  </div>
</form>
     
        <script src="js/mainjspage.js"></script>
        
    </body> 
</html> 
