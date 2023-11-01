<!DOCTYPE html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<style type="text/css">
			body{
				margin: 0;
				padding: 0;
				position: absolute;
			}
			.content{
				position: relative;
				left: 430px;
				top: 200px;
			}
			img{
				float: left;
				width:80px;
			}
			p{
				float: left;
				line-height: 80px;
				color: red;
				font-size: 20px;
			}
		</style>
		<script>
			setTimeout(function(){
				location.href='{{$url}}';
			},{{$time}});
		</script>
		<meta charset="utf-8" />
		<title>OPPO</title>
	</head>

	<body>
	
        <div class="content">
        	<img src="{{asset('media/image/success.png')}}">
            <p>{{$message}}!</p>
            <p>请等待,正在跳转页面...</p>
        </div>
   
	</body>

</html>



