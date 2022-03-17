<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
if(isset($_SESSION['email'])){
    if(isset($_POST['currentPassword']) && isset($_POST['newPassword']) && isset($_POST['confirmPassword'])){
      
        $currentPassword = $_POST['currentPassword'];
        $newPassword = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmPassword'];
        
        if(empty($currentPassword)){
            header("Location: change-password.php?error=Old Password is required");
            exit();
        }
        else if(empty($newPassword)){
            header("Location: change-password.php?error=New Password is required");
            exit();
        }
        else if($newPassword !== $confirmPassword){
            header("Location: change-password.php?error=The confirmation password does not match");
            exit();
        }else{
            $currentPassword = md5($currentPassword);
            $newPassword= md5($newPassword);
            $confirmPassword = md5($confirmPassword);

            $sql = "SELECT password FROM customers 
                    WHERE email = '$email' AND password = '$newPassword'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result === 1)){
               $sql_2 = "UPDATE customers SET password = '$newPassword'
                        WHERE email = '$email'";
                mysqli_query($conn, $sql_2);
                header("Location: change-password.php?error=Incorrent");
                exit();
            }else{
                header("Location: change-password.php?success=Your password has been changed successfully");
                exit();
            }    
        }   
    }
    else{
        header("Location: Homepage.php");
        exit();
    }
}
$conn->close();
?>