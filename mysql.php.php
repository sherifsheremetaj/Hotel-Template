<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "palma";

 $emri = $_POST['Emri'];
  $mbiemri = $_POST['Mbiemri'];
   $vendi = $_POST['Country'];
    $arritja = $_POST['Check-in'];
     $largimi = $_POST['Check-out'];
      $Territur = $_POST['Adults'];
       $dhomat= $_POST['Rooms'];
        $femije = $_POST['Children'];
         $komente = $_POST['Message'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO rezervimi (Emri,Mbiemri,Vendi,Arritja,Largimi,Territur,Femije,Dhoma,Komente)
    VALUES ('$emri','$mbiemri','$vendi','$arritja','$largimi','$Territur','$femije','$dhomat','$komente')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>