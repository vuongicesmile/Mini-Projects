<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php File - ADD</title>
    
    <script src="/Applications/XAMPP/xamppfiles/htdocs/owo.dev/exercise/jquery.js">
    $(documet).ready(function(){
        alert('hello');
    });
</script>
</head>
<body>
<?php
require_once('functions.php');

//thong bao nguo dung da nhap thanh cong
$flag = false;
 if (isset($_POST['title']) && isset($_POST['description'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
//error title
$errorTitle ='';
if(checkEmpty($title))        $errorTitle='<p class="error">Du lieu khong duoc rong </p>'; 
if(checkLength($title,5,100)) $errorTitle.='<p class="error">tieu de dai tu 5 den 100 ki tu </p>';

//error description
$errorDescription ='';
if(checkEmpty($description))        $errorDescription='<p class="error">Du lieu khong duoc rong </p>'; 
if(checkLength($description,10,5000)) $errorDescription.='<p class="error">noi dung dai tu 10 den 5000 ki tu </p>';

// A-Z,a-z,0->9
if ($errorTitle=='' && $errorDescription=='') {
   $data = $title.'||'.$description;

   $name = ramdomString(5);
    $filename = './file/'.$name.'.txt';
   if(file_put_contents($filename,$data)){
       $title ='';
       $description='';
       $flag = true;
   }

}

}
?>

    <div id="wrapper">
        <div class="title">PHP FILE-ADD</div>
        <div id="form">
            <form action="#" method="post" name="add-form">
                <div class="row">
                    <p>Title</p>
                    <input type="text" name="title" value="<?php echo $title; ?> ">
                    <?php echo $errorTitle; ?>
                </div>

                <div class="row">
                    <p>Description</p>
                    <textarea name="description" cols="100" rows="5"> <?php
                    echo $description;
                    ?>
                    </textarea>
                    <?php
                    echo $errorDescription;
                    ?>
                </div>

                <div class="row">
                    <input type="submit" value="Save">
                    <input type="button" value="Cancel" name="cancel" id="cancel-button">
                </div>
                <div class="row"><p>Du lieu da ghi thanh cong</p></div>
                <?php 
                if($flag == true) echo '<div class="row"><p>Du lieu da ghi thanh cong</p></div>'
                ?>
            </form>
        </div>
    </div>
</body>
</html>