<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">LOGIN</div>
        <div id="form">
            <?php
                session_start();
                if($_SESSION['flagPermission']==true){
                    echo '<h3>Xin chao :'.$_SESSION['fullName'].'</h3>';
                    echo '<a href="logout.php">Dang xuat</a>';  
                }else{

                
                

            ?>
            <form action="process.php" method="post" name="add-form">
            <div class="row">
                <p>UserName</p>
                <input type="text" name="userName" >
            </div>
            <div class="row">
                <p>password</p>
                <input type="password" name="password">
            </div>
            <div class="row">
                <input type="submit" value="Dang nhap" name="submit">
            </div>
            </form>
            <?php
                }
                ?>
        </div>
    </div>
</body>
</html>
                