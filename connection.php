 <?php
 $servername = "localhost:3308";
 $username = "root";
 $password = "";

 try{
    $conn = new PDO("mysql:host=$servername;dbname=ics_e", $username,$password);
     
    //set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
 }catch (PDOException $e){
    echo "Connection Failed " . $e->getMessage();
 }
 
 
 
 
 ?>