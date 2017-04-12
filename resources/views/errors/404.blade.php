<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>not found page</title>
	<style>
	#error{
		width: 90%;
		margin:0 auto;
		height: 500px;
	}
	#error a{
		padding: 5px 10px;
		background: #3E2BF3;
		color: #fff;
		text-decoration: none;

	}
     img{
     	width: 100%;
       height:60%;
     }
     .clean-fix{
     	overflow: hidden;
     	clear: both;
     	height: 10px;
     }
	</style>
</head>
<body>
<div id="error">
<a href="{{URL::to('/')}}">Về trang chủ</a>
<div class="clean-fix"></div>
<img src="{{URL::to('/')}}/frontend/assets/images/notfound.jpg" alt="">
</div>
</body>
</html>
