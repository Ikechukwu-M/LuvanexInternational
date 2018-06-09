<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/coolstyle.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="all">
	<title>Glory Schools</title>
</head>
<body class="schbody">
	<!-- Navigation Bar -->
	<div class="container">
	<nav class="navbar navbar-default" id="navbody">
		<div class="container" align="center">
		<img src="slogo.png">
	</nav>
	</div>
<!-- NOW FOR THE JUMBOTRON -->
<div class="container" id="bacim">
    <!-- CAROUSEL -->
    <div class="carousel slide" id="myCarousel" data-ride="carousel">
      <!-- Indicators Now -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- WRAPPER FOR SLIDES -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="welcome.png" alt="welcome" class="img-responsive" width="100%" height="500px">
          <div class="carousel-caption">
          	<h2>Welcome</h2>
          	<p>Welcome to Glory Schools. A place where we mould scholars leaders and thinkers of today's global world</p>
          </div>
        </div>
        <div class="item">
          <img src="pry.png" alt="Primary/Montessori" class="img-responsive" width="100%" height="500px">
        </div>
        <div class="item">
          <img src="computer.png" alt="Laboratories" class="img-responsive" width="100%" height="500px">
        </div>
        <div class="item">
          <img src="art.png" alt="Joy" class="img-responsive" width="100%" height="500px">
        </div>
      </div>
      <!-- LEFT AND RIGHT CONTROLS -->
      <a href="#myCarousel" class="left carousel-control" data-slide="prev" role="button">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Prev</span>
      </a>
      <a href="#myCarousel" class="right carousel-control" data-slide="next" role="button">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

	<!-- Here starts the other divs -->
	<div class="container">
		<div class="row" id="box">
			<div class="col-sm-4" id="sch">
				<div class="col-sm-4"><img src="paint.png"></div>
				<div class="col-sm-8" id="words">
					<h2 id="top">Schools:</h2>
					<p><a href="#">1. Montessori/Pry</a></p>
					<p><a href="#">2. Secondary Sch.</a></p>
				</div>	
			</div>
			<div class="col-sm-4" id="news">
				<h2 id="top">News Update</h2>
				<iframe id="newsw" src="editorial.php" width="320" height="110" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" style="border: #000000 0px solid;"></iframe>
			</div>
			<div class="col-sm-4" id="info">
				<div class="col-sm-4"><img src="pen.png"></div>
				<div class="col-sm-8">
					<h2 id="top" style="padding-left: 20px;">Special Info</h2>
					<div id="adm"><a href="#">Download Admission Form</a></div>
					<div id="res"><a href="#">CHECK RESULTS ONLINE</a></div>
				</div>	
			</div>

		</div>
	</div>





<!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
