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
</style>
<body>
<?php
	$n1 ="";
	$n2=	"";
	$caculate="";
	if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"])) {
		$n1	= $_POST["number1"];
		$n2	= $_POST["number2"];
		$caculate	= $_POST["caculate"];
		$flag =true;
		// if(is_numberic($n1) && is_numberic($n2)) {

		
		switch ($caculate) {
			case '+':
				$result=$n1+$n2;
				break;
			case"-":
				$result=$n1-$n2;
				break;
			case"*":
			case"X":	
				$result=$n1*$n2;
				break;

			case"/":
			case":":	
				$result=$n1/$n2;
				break;
			case"%":
				$result=$n1%$n2;
				break;		
			default:
				$result=$n1 +$n2;
				$caculate="+";
				break;
		}
	
	
	}
?>
<div class="content">
	<h1>Mô phỏng máy tính điện tử</h1>
	<form action="#" method="post" name="main-form">
	<div class="row">
		<span>Số thứ nhất</span>
		<input type="text" name="number1" value=<?php echo $n1; ?>>
	</div>
	<div class="row">
		<span>Phép toán</span>
		<input type="text" name="caculate" value=<?php echo $caculate; ?>>
	</div>
	<div class="row">
		<span>Số thứ hai</span>
		<input type="text" name="number2" value=<?php echo $n2; ?>>
	</div>
	<div class="row">
		<input type="submit" value="Xem kết quả" name="submit">
	</div>
	<div class="row">
	<p>
			kết quả =<?php echo $n1 ."".$caculate."".$n2."=".$result ?>
	</p>
		
	</div>
	</form>
</div>

</body>
</html>