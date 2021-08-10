<?php 

/*$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "central_mosque";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
	or die("Failed to connect:");
}*/

if($_SERVER['REQUEST_METHOD']) == "POST" && isset(['submit'])) {

     $conn = msqli_connect('localhost', 'root', '', 'central_mosque') or die('Failed to connect:'.mysql_connect_error());
     if (isset($_POST['userName']) && isset($_POST['name']) && (isset($_POST['email']) && (isset($_POST['password'])) {
          # Picking Data
          # code...
          $firstName = $_POST['firstName'];
          $surName = $_POST['surName'];
          $otherName = $_POST['otherName'];
          $state = $_POST['state'];
          $local = $_POST['local'];
          $country = $_POST['country'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $place = $_POST['place'];
          $phone = $_POST['phone'];

          $password = $_POST['password'];


          $sql = "INSERT INTO `login`(`user_name`, `name`, `email`, `password`) VALUES (`user_name`,`$name`, `$email`, `$password`)";
     }

     $query == mysqli_query($conn, $query);

     header("Location: login.php");
     die;

      if ($query)   {
          # code...
          echo "Registration Successful!";
     }
     else {
          echo "Registration Failed!";
     }
}