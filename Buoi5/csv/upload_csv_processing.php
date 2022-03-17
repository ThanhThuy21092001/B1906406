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
    
    $mesage = '';

    if(isset($_POST["upload"])){
        if($_FILES['product_file']['name']){
            $filename = explode(".", $_FILES['product_file']['name']);
            if(end($filename) == "csv"){
                $handle = fopen($_FILES['product_file']['tmp_name'], "r");
                while($data = fgetcsv($handle)){
                    $product_id = mqli_real_escape_string($conn, $data[0]);
                    $product_fullname = mqli_real_escape_string($conn, $data[1]);
                    $product_email = mqli_real_escape_string($conn, $data[2]);
                    $product_reg_date = mqli_real_escape_string($conn, $data[3]);
                    $product_password = mqli_real_escape_string($conn, $data[4]);
                    $product_img_profile = mqli_real_escape_string($conn, $data[5]);
                    $sql = "UPDATE customers 
                            SET id = '$product_id',
                                fullname = '$product_fullname',
                                email = '$product_email',
                                reg_date = '$product_reg_date',
                                password = '$product_password',
                                img_profile = '$product_img_profile'
                                WHERE email = '$product_email'
                                ";
                    mysqli_query($conn, $sql);
                }
                fclose($handle);
                header("Location: upload_csv_proccessing.php?updation = 1");
            }
            else{
                $message = '<label class="text-danger">Please Select CSV File only</label>';     
            }
        }
        else{
            $message = '<label class="text-danger">Please Select File</label>';
        }
    }
    if(isset($_GET["updation"])){
        $message = '<label class="text-success">Product Updation Done</label>';
    }
    $sql = "SELECT * FROM customers";

    $result = mysqli_query($conn, $sql);
?>
