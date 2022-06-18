<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message =$_POST['message'];
    
  
  // Connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "contact";

  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Die if connection was not successful
  if(!$conn){
      die("Sorry we failed to connect: ". mysqli_connect_error());
  }
  else{ 
    // Submit these to a database
    // Sql query to be executed 
    $sql = "INSERT INTO `users` (`name`, `email`, `message`) VALUES ('$name', '$email','$message')";
    $result = mysqli_query($conn, $sql);

if($result){
      echo "<script> alert(' Your data has been send...! ')</script>";
    }
    
    // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    else{
        // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        echo "<script> alert(' Your data is not send. Please try again ')</script>";
        // header('Location: frontpage.php');
    }
    header('Location: frontpage.php');

      }

    } 
  ?>