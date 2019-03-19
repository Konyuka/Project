<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Project Manager</title>
		<!-- Bootstrap core CSS -->
		<link href="{{ asset('lattes/css/bootstrap.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="{{asset('lattes/css/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('lattes/css/owl.theme.default.min.css')}}"  rel="stylesheet">
		<link href="{{asset('lattes/css/style.css')}}" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="{{asset('lattes/js/ie-emulation-modes-warning.js')}}"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page-top">
		<!-- The Content -->

	@yield("content")

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="{{asset('lattes/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('lattes/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('lattes/js/cbpAnimatedHeader.js')}}"></script>
		<script src="{{asset('lattes/js/theme-scripts.js')}}"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="{{asset('lattes/js/ie10-viewport-bug-workaround.js')}}"></script>
	</body>
</html>
