<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khấu</title>
</head>
<body>
    <h3 align = "center">Change Password</h3>
    <form action="check.php" method = "post">
    <div>
        <?php if(isset($_GET['error'])) {?>
        <p class = "error"><?php echo $_GET['error'];?></p>
        <?php } ?>

        <?php if(isset($_GET['success'])) {?>
        <p class = "success"><?php echo $_GET['success'];?></p>
        <?php } ?>
    </div>
        Email : <input type="email" name = "email" id = "email"> <br>
        Mật khẩu cũ: <input type="password" name = "currentPassword" id = "currentPassword"> <br>
        Mật khẩu mới: <input type= "password" name = "newPassword" id = "newPassword"> <br>
        Nhập lại mật khẩu mới: <input type="password" name = "confirmPassword" id = "confirmPassword"> <br>
        <input type="submit">

    </form>
</body>
</html>