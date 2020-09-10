<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
*{
	margin:0px;
	padding: 0px;

}
.content{
	margin:20px auto;
	width:600px;
	border: 1px solid #999;
	padding: 10px;
}
.content h1{
	color: red;
	text-align:center;
}
.row{
	margin-top: 20px;
}
span{
	display: inline-block;
	width:255px;
	text-align:right;
}
.content div.row input[type=text]{
	padding:3px 5px;
}
.content div.row input[type=submit]{
	padding:3px 5px;
	display: block;
	margin: 0px auto 20px auto;
}

.content div.row p{
	font-weight:bold;
	font-size:20px;
	text-align:center;
}
.content div.result {
    margin-left:50px;
}
.content div.result img {
    width:100px;
    height:100px;
    overflow:hidden;
    float: left;
}
.content div.result p{
    text-align:justify;
    font-size:22px;
    height:100px;
    line-height:100px;   
}
.content div.result p span{
    font-style:italic;    
}

</style>
<body>
<?php
	$day =" ";
	$mon =" ";
	
	$image=" ";
	$name=" ";
	$time=" ";
	$flagShow=true;
    if(isset($_POST["day"]) && isset($_POST["month"])){
		$day =$_POST["day"];
		$mon =$_POST["month"];
		if(is_numeric($day) && is_numeric($mon)){
			
			switch ($mon) {
				case 1:
					if($day <=19){
					$image ="capricorn";	
					$name ="ma kết";
					$time ="23/12-19/01";
				}
				if($day >=20){
					$image ="aquarius";	
					$name ="Bảo bình";
					$time ="20/01-19/02";
				}
				if($day<1 || $day>31) $flagShow =false;
				break;
				case 2:
					if($day <=19){
					$image ="aquarius";	
					$name ="bảo bình";
					$time ="23/12-19/01";
				}
				if($day >=20){
					$image ="pisces";	
					$name ="song ngư";
					$time ="20/02-21/03";
				}
				case 3:
					if($day <=21){
						$image ="pisces";	
						$name ="song ngư";
						$time ="20/02-21/03";
					}
					if($day >=22){
						$image ="arie";	
						$name ="bạch dương";
						$time ="22/03-20/04";
					}
				break;
				case 4:
					if($day <=20){
						$image ="arie";	
						$name ="bạch dương";
						$time ="22/03-20/04";
					}
					if($day >=21){
						$image ="taurus";	
						$name ="kim ngưu";
						$time ="21/04-21/05";
					}
				break;
				case 5:
					if($day <=20){
						$image ="taurus";	
						$name ="kim ngưu";
						$time ="21/04-21/05";
					}
					if($day >=22){
						$image ="gemini";	
						$name ="song tử";
						$time ="22/05-22/06";
					}
				break;
				case 6:
					if($day <=22){
						$image ="gemini";	
						$name ="song tử";
						$time ="22/05-22/06";
					}
					if($day >=23){
						$image ="cancer";	
						$name ="cự giải";
						$time ="23/06-23/07";
					}
				break;
				case 7:
					if($day <=23){
						$image ="cancer";	
						$name ="cự giải";
						$time ="23/06-23/07";
					}
					if($day >=24){
						$image ="leo";	
						$name ="sư tử";
						$time ="24/07-23/08";
					}
				break;
				case 8:
					if($day <=24){
						$image ="leo";	
						$name ="sư tử";
						$time ="24/07-23/08";
					}
					if($day >=24){
						$image ="virgo";	
						$name ="xử nử";
						$time ="24/08-23/09";
					}
				break;
				case 9:
					if($day <=23){
						$image ="virgo";	
						$name ="xử nử";
						$time ="24/08-23/09";
					}
					if($day >=24){
						$image ="libra";	
						$name ="thiên bình";
						$time ="24/09-23/10";
					}
				break;
				case 10:
					if($day <=23){
						$image ="libra";	
						$name ="thiên bình";
						$time ="24/09-23/10";
					}
					if($day >=24){
						$image ="scoprio";	
						$name ="thiên yết";
						$time ="24/10-22/11";
					}
				break;
				case 11:
					if($day <=22){
						$image ="scoprio";	
						$name ="thiên yết";
						$time ="24/10-22/11";
					}
					if($day >=23){
						$image ="sagitarus";	
						$name ="nhân mã";
						$time ="23/11-22/12";
					}
				break;
				case 12:
					if($day <=22){
						$image ="sagitarus";	
						$name ="nhân mã";
						$time ="23/11-22/12";
					}
					if($day >=23){
						$image ="sagitarus";	
						$name ="nhân mã";
						$time ="23/12-19/01";
					}
				break;

					
				default:
					$flagShow=false;
					break;
			}


		}else{
			$flagShow=false;
		}
    }
    
?>	
<div class="content">
	<h1>lấy chòm sao</h1>
	<form class="form" action="#" method="post">
	<div class="row">
		<span>Ngày sinh</span>
		<input type="text" name="day" value=<?php echo $day; ?>>
	</div>
	<div class="row">
		<span>Tháng sinh</span>
		<input type="text" name="month" value=<?php echo $mon; ?>>
	</div>
	
	<div class="row">
		<input type="submit" value="lấy chòm sao">
	</div>
	
	</form>
	<?php
	if($flagShow==true){
		$result='<div class="result">
		<img src="image/'.$image.'.jpg" alt="'.$image.'">
		<p>'.$name.' <span>('.ucfirst($image).' : '.$time.')</span></p>
		</div>';}else{
			$result="Dữ liệu không hợp lệ";
		}
		echo $result;
	?>
	</div>
	</body>
	<!-- <img src="image/arie.jpg" alt="arie">
    <p>Cung bạch dương <span>(arie 22/03-20/04)</span></p>
    <img class="bb"src="image/aquarius.jpg" alt="aquarius">
	<p>Cung bảo bình <span>(aquarius 23/12-19/01)</span></p>
    <img src="image/cancer.jpg" alt="cancer">
	<p>Cung cự giải <span>(cancer 23/06-23/07)</span></p>
    <img src="image/taurus.jpg" alt="taurus">
	<p>Cung kim ngưu <span>(taurus 21/04-21/05)</span></p>
    <img src="image/capricorn.jpg" alt="capricorn">
	<p>Cung ma kết <span>(capricorn 23/12-19/01)</span></p>
    <img src="image/sagitarus.jpg" alt="sagitarus">
	<p>Cung nhân mã <span>(sagitarus 23/11-22/12)</span></p>
    <img src="image/pisces.jpg" alt="pisces">
	<p>Cung song ngư <span>(pisces 20/02-21/03)</span></p>
    <img src="image/gemini.jpg" alt="gemini">
	<p>Cung song tử <span>(gemini 22/05-22/06)</span></p>
    <img src="image/leo.jpg" alt="leo">
	<p>Cung sư tử <span>(leo 24/07-23/08)</span></p>
    <img src="image/libra.jpg" alt="libra">
	<p>Cung thiên bình <span>(libra 24/09-23/10)</span></p>
    <img src="image/scorpio.jpg" alt="scorpio">
	<p>Cung thiên yết <span>(scorpio 24/10-22/11)</span></p>
    <img src="image/virgo.jpg" alt="virgo">
	<p>Cung xử nử <span>(virgo 24/08-23/09)</span></p> -->

</html>