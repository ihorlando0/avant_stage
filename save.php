<?php
   // var_dump($_POST);
   // die();



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_app";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pseudo = $_POST["pseudo"];
    $email =$_POST ["email"];
    $pass =sha1 ($_POST["pass"]);
if (($_POST["pseudo"])!="" && ($_POST["email"])!="" && ($_POST["pass"])!="") {

    $pseudolength = strlen($pseudo);
    if ($pseudolength <= 255){
        $reqmail = $bdd->prepare("SELECT * FROM user_app WHERE email=?");
       	       	$reqmail->execute(array($mail));
       	       	$mailexist = $reqmail->rowCount();
       	       	if($mailexist == 0){

                      
    

    //echo "connected successfully";
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO user_app (user_pseudo, user_email, user_pass) 
    VALUES (:user_pseudo, :user_email, :user_pass)");
    $stmt->bindParam(':user_pseudo', $pseudo);
    $stmt->bindParam(':user_email', $email);
    $stmt->bindParam(':user_pass', $pass);
    $stmt->execute();
}
else
echo "efa misy manana io"

}
   else
    echo "tsy azo atao mihoatra ny 255";

    }
    else
        echo "errer";
    


    //echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>