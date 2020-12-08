<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">Process</div>
         <div id="form">
             <?php
                 function checkEmpty($value) {
                    $flag = false;
                    if (!isset($value) || trim($value) == '') {
                      $flag = true;
                    }
                    return $flag;
                  }
                require_once 'function.php';
                if($_SESSION['flagPermission']==true){
                    
                }else{
                
                if (!checkEmpty($_POST['userName'])&& !checkEmpty($_POST['password'])) {
                    $username = $_POST['userName'];
                    $password = md5($_POST['password']);
                    // echo '<pre>';
                    // print_r($_POST);
                    // echo '</pre>';
                    $data = parse_ini_file('user.ini');
                    // $result = array();
                    // foreach ($data as $value ) {
                    // $value = explode('|',$value);
                    // if ($value[0]== $username) {     
                    //     $result = $value;
                    //     break;
                    // }
                    
                    
                    // }
              $userInfo =explode('|',$data[$username]);
                    
                    // echo '<pre>';
                    // print_r($userInfo);
                    // echo '</pre>';
                        

                    // echo '<pre>';
                    // print_r($_POST);
                    // echo '</pre>';

                    if ($userInfo[0]== $username && $userInfo[1]== $password) {
                    //  echo "sucess";
                     session_start();
                     $_SESSION['fullName']= $userInfo[2];
                     $_SESSION['flagPermission']= true;



                     echo '<h3>Xin chao :'.$_SESSION['fullName'].'</h3>';  
                    echo '<a href="logout.php">Dang xuat</a>';
                    }

                    // print_r($data);
                }else{
                    // chuyen den file can den
                    header('location: 01.php');
                    
                }
            }
            //  echo '<pre>';
            //  print_r($_POST);
            //  echo '</pre>';
                
             ?>
         </div>
    </div>
</body>
</html>