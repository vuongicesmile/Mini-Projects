<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vẽ tam giác</title>    
</head>
<style>
.content {
    margin:20px auto;
    width:1200px;
    border:1px solid #999;
    padding:10px;
    
}
.content h1 {
    color:red;
    text-align:center;
}
.content ul {
    margin:23px;
    list-style-type:none;
}
.content ul li{
    display:inline-block;
    list-style:none;
    
}
.content ul li a{
    display:inline;
    width:200px;
    height:200px;
}
.content div.result{
    margin-left:350px;
    padding:10px;

    
}

</style>
<body>
    <div class="content">
    <h1>Vẽ tam giác</h1>
    <ul>
    <li><a href="index.php?type=1"><img src="images/hinh1.jpg"> </a></li>
    <li><a href="index.php?type=2"><img src="images/hinh2.jpg"> </a></li>
    <li><a href="index.php?type=3"><img src="images/hinh3.jpg"> </a></li>

    <div class="result">
     <?php
     $result="";
     if(isset($_GET["type"])){
          $type =$_GET["type"];

          switch ($type) {
              case 1:
                $a=1;
                  while ($a <= 6) {
                      $result.=str_repeat("*",$a)."<br/>";
                      $a++;
                  }
                  break;
                  case 2:
                    $a=6;
                      while ($a >= 1) {
                          $result.=str_repeat("*",$a)."<br/>";
                          $a--;
                      }
                      break;   
                    case 3:
                        $i=1;
                        $n=6;

                          while ($i <= $n) {
                              $space =str_repeat("&nbsp;&nbsp;",$n-$i);
                              $character=str_repeat("*",2*$i-1);
                              $result.=$space.$character."<br/>";
                              $i++;
                          }
                          break;
            //   default:
            //       # code...
            //       break;
          }
     }
     echo $result;
     ?>
    </ul>
     
    
   </div>
</div>
</body>
</html>