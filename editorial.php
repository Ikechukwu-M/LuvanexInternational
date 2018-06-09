<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- link rel="stylesheet" href="css/font.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" -->
</head>
<body>
	<header>
		<nav id="header-nav" class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="MyProject.html"><div>MO'ZEE BEAUTY STUDIO</div></a>
			</div>	

				<div>
				<ul class="nav navbar-nav navbar-left breadcrumb">
					<li><a class="active" href="MyProject.html">HOME</a></li>
					<li><a href="About.html">ABOUT</a></li>
					<li><a href="Weddings.html">WEDDINGS</a></li>
					<li><a href="Beauty&Editorial.html">BEAUTY &amp EDITORIAL</a></li>
					<li><a href="BookOnline.html">BOOK ONLINE</a></li>
				</ul>
				</div>

			</div>
		</nav><!-- END OF NAVIGATION BAR -->
	</header>


<div class="container">
	<h2 id="start">Begin Learning Javascript Here</h2>
	<button type="button" 
	onclick="document.getElementById('start').innerHTML = 'You Have Began Your Javascript Lessons!'">Begin Here</button>

	


	<h1 id="grace">Decorum please</h1>
	<button type="button"

	onclick="document.getElementById('grace').innerHTML = 'Look, JUST SHUT UP, PULEEEZ!!!!'">Quiet</button>

	<script >console.log(5+6);</script><br>

	<!-- Trigger the modal -->
	<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Get Payne</button>
	<!-- THE MODAL -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- THE MODAL CONTENT -->
			<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Welcome To The House OF Payne</h3>
			</div>	
			<div class="modal-body">
				<p>This is a wholesome entertaining movie from the stables of Tyler Perry... Get Yours!!</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
			</div>

			</div>
		</div>
	</div><br>

	<!-- TOTAL PRICE OF BEVERAGES -->
	<p>Price1, which is for milk, is  340</p>
	<p>Price1, which is for choco, is 430</p>
	<p>the total, which is the combination of both prices, is</p>
	<p id="bev"></p>

	<script>
		var x = 340, y = 430, z = x + y;
		document.getElementById('bev').innerHTML = z;
	</script>


<p id="inc"></p>
	<script>
		var x = 340;
		x--; 
		var z = x;
		document.getElementById('inc').innerHTML = z;
	</script>


	<p id="movie"></p>
	<script>
		var v = "Jack", x = " ", y = "Bauer", z = v + x + y;
		document.getElementById('bev').innerHTML = z;
	</script>

	<p id="conc"></p>
	<script>
		txt1 = "Today is a very ";
		txt1 += "great day"
		document.getElementById('conc').innerHTML = txt1;
	</script>


	<h4>Now to deep our feet  into the clear waters of functions</h4>
	<p id="fnt"></p>
	<script> 
	function myFunction(a, b) {
		return a * b};
	document.getElementById("fnt").innerHTML = myFunction(5,7);
		
	</script>


    <div id="date">Someday's gonna be the day I, turn guru in Javascript etal, in fact that day is...</div>
    <button type="button"
    onclick = "document.getElementById('date').innerHTML = Date()">What date is it please?</button>

    <!-- NOW FOR innerHTML sturvs -->
    <h2 id="rest">Every day is a gift, even today.</h2>
    <button onclick="this.innerHTML = Date()">Today's date is?</button>


    <p>Click the button to display the date and time</p>
    <button type="button"
    onclick="displayDate()">The time is ?</button>
    <script>
    	function displayDate() {
    		document.getElementById("show").innerHTML = Date();
    	}
    </script>
    <p id="show"></p>


<p>Click the button to display a random</p>
    <button type="button"
    onclick="Math.random()">Click button</button>
    <script>
    	function Math.random() {
    		document.getElementById("how").innerHTML = Math.random();
    	}
    </script>
    <p id="how"></p>



<!-- NUMBERS -->
	<!-- p>Infinity is returned if you calculate a number outside the largest possible number.</p>
	<button onclick="myFunction()">Try This</button>
	<p id="dig"></p>
	<script>
	function myFunction() {
			var myNumber = 2;
			var text = "";
		    while (myNumber ! = Infinity) { //Execute till infinity
			myNumber = myNumber * myNumber;
			text = text + myNumber + "<br>";
			}
			document.getElementById('dig').innerHTML = text;
		}
	</script -->


<p>Infinity is returned if you calculate a number outside the largest possible number.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var myNumber = 2; 
    var txt = "";
    while (myNumber != Infinity) {
        myNumber = myNumber * myNumber;
        txt = txt + myNumber + "<br>";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>


<!-- ARRAYS AND LOOPS -->
<script type="text/javascript">
<!--
var count;
document.write("Starting Loop" + "<br />");
for(count = 0; count < 15; count++){
document.write("Current Count : " + count );
document.write("<br />");
}
document.write("Loop stopped!");
//-->
</script>

<div>
<br><h3>Here is how to remove an element from an array</h3>
<button type="button"
onclick="myFunction()">Give it a try</button>
<p id="rem"></p>

<script type="text/javascript">
	var colours = ["red", "blue", "green", "purple"];
document.getElementById('rem').innerHTML = colours;

function myFunction() {
	colours.pop();
	document.getElementById('rem').innerHTML = colours;
}
</script>
<br>
</div>

<div>
<h3>And here is how to add an element to an array</h3>
<button type="button"
onclick="myFunction()">Try It</button>
<p id="add"></p>
<script type="text/javascript">
	var drinks = ["pepsi", "7-up", "sprite"];
	document.getElementById('add').innerHTML = drinks;
	function myFunction() {
		drinks.push("Limca");
		document.getElementById('add').innerHTML = drinks;
	}
</script>
</div>

<h3>Here is how to remove an element from an array by shifting</h3>
<button type="button"
onclick="myFunction()">Give it a try</button>
<p id="shh"></p>

<script type="text/javascript">
	var colours = ["red", "blue", "green", "purple"];
document.getElementById('shh').innerHTML = colours;

function myFunction() {
	colours.shift();
	document.getElementById('shh').innerHTML = colours;
}
</script>
<br>

<h3>Here is how to add an element to an array by unshifting</h3>
<button type="button"
onclick="myFunction()">Give it a try</button>
<p id="uns"></p>

<script type="text/javascript">
	var colours = ["red", "blue", "green", "purple"];
document.getElementById('uns').innerHTML = colours;

function myFunction() {
	colours.unshift('pink');
	document.getElementById('uns').innerHTML = colours;
}
</script>
<br>
<div>
<h3>And here is how to add and remove an element to an array using the splice method</h3>
<button type="button"
onclick="myFunction()">Try It</button>
<p id="spc"></p>
<script type="text/javascript">
	var drinks = ["pepsi", "7-up", "sprite", "coca-cola"];
	document.getElementById('spc').innerHTML = drinks;
	function myFunction() {
		drinks.splice(0, 2, "Limca", "mirinda", "diet-coke");
		document.getElementById('spc').innerHTML = drinks;
	}
</script>
</div>

<!-- Now on to the next one; BOOLEAN -->
<h3>(10 < 7)True or False</h3>
<button type="button"
onclick="document.getElementById('boo').innerHTML = Boolean(10<7)">TRUTH OR DARE</button>
<p id="boo"></p>

<!-- Now FOR SOME CONDITIONS -->
<h4>Use the'if condition' to code the appropriate greeting</h4>
<button onclick="myFunction()">Click</button>
<p id="grt"></p>
<script>
	function myFunction() {
		var greeting;
		var time = new Date().getHours();
		if (time < 10) {
			greeting = "Good morning";
		} else if (time < 20) {
			greeting = "Good day";
		} else {
			greeting = "Good Evening"
		}
	document.getElementById('grt').innerHTML = greeting;	
	} 

</script>


<!-- SWITCH -->
<h4>SWITCH TO THE DAY OR GIVE DEFAULT RESPONSE</h4>
<p id="swt"></p>
<script>
		var day;
		switch (new Date().getDay()) {
			case 0:
				day = "Sunday";
				break;
			case 1:
				day = "Monday";
				break;
			default:
				day = "the day the Lord has made";
				break;
			case 3:
				day = "Wednesday";
				break;
			case 4:
				day = "Thursday";
				break;
			case 5:
				day = "Friday";
				break;
			case 6:
				day = "Saturday";
				break;
	}
	document.getElementById("swt").innerHTML = "Today is " + day;
</script>






</div>

<div class="container">
	<h4>PHP Mattaz</h4>
	<p>"var_dump()' returns the data-type of the string in the parenthesis e.g, it will return 34.25 as...</p>
	<?php
	$k = 34.25;
	var_dump($k);
	?><br>

	<?php
	Echo str_replace("good", "great", "I'm doing good")
	?><br>

	<h4>PHP Constants</h4>
	<?php
	define("GREETING", "Welcome to Mozee Studios", "true");
	echo GREETING; 
	?>

	<h4>NOW TO DO THE CONDITIONAL GREETING IN PHP</h4>
	<?php
	$t = date("H");
	if ($t < 10) {
		echo "Have a good morning";
	}
	elseif ($t < 20) {
		echo "Have a good day";
	}
	else {echo "Have a good evening";
	}
	?>

	<h4>Let's wet our beak in the waters of Functions shall we?!</h4>
	<?php
	function myCourse($fname, $cou) {
		echo "$fname is taking us $cou <br>";
	}
		myCourse("Engr Bolaji", "PHP");
		myCourse("Engr Sola", "Wordpress");
		myCourse("Engr Jamiu", "HTML");
		myCourse("Engr Josh", "CSS");
		myCourse("Engr Yuunis", "MS Word");
		myCourse("Ikechukwu", "Apps Dev");
	?>	
	<br>

	<h4>NOW UNTO THE NEXT ONE: ARRAY</h4>
	<?php
	$programming = array("html ", "css ", "javascript ", "php ", "mySQL ");?>

	<ul>
	<?php
	foreach ($programming as $pack) {
		echo "<li>$pack;</li>";
	}
	?>
	</ul><br>
	<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['HTTPS'];
?>


</div>


<div class="container well">
	<h1>Celebral Trial</h1>
	
	<p style="background-color: white; padding: 15px; border-left: 5px solid green; "><?php
	Echo "Hello World!";
	?>
	This should reproduce that which we find on W3C</p>
	<button class="btn btn-success" type="button" style="font-size: 18px;">Try it Yourself &raquo;</button>
</div>


	<!-- FOOTER BEGINS -->
	<footer class="panel-footer">
		<div class="container">
			<div class="row">
				<section class="col-sm-3">
					<div>&copy;2023 by Ikechukwu.</div>
					<div>proudly created with <span><u>MyPC</u></span></div>
				</section>
				<section class="col-sm-6">
				<div>
				<ul class="breadcrumb">
					<li><a id="footer" class="active" href="MyProject.html">HOME</a></li>
					<li><a id="footer1" href="About.html">ABOUT</a></li>
					<li><a id="footer2" href="Weddings.html">WEDDINGS</a></li>
					<li><a id="footer3" href="Beauty&Editorial.html">BEAUTY &amp EDITORIAL</a></li>
					<li><a id="footer4" href="BookOnline.html">BOOK ONLINE</a></li>
				</ul>
				</div>
				</section>
				<section class="col-sm-3">
					<a href="#"><i class="fa fa-facebook-official" style="font-size: 36px;"></i></a>
 					<a href="#"><i class="fa fa-twitter" style="font-size: 30px;"></i></a>

				</section>
			</div>
		</div>
	</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>