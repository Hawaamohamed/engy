
<html>
<head>
<meta charset=UTF-8>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet"  href="css/font-awesome.min.css">
		<link rel="stylesheet"  href="css/index.css">
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top nav">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand hvr-skew-forward" href="#">The Doctor</a>
				</div>


				<div class="collapse navbar-collapse" id="ournavbar">
					<ul class="nav navbar-nav navbar-right">
					<li><a href="main.php">Home</a></li>

					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">

						<li><a href="#">Surgery Otolaryngology services</a></li>
						<li class="divider"></li>
						<li><a href="#">Ophthalmology sevices</a></li>
						<li class="divider"></li>
                         <li><a href="#">Nephrology sevices</a></li>
						<li class="divider"></li>
						<li><a href="#">Obstetrics Gynecology services</a></li>
						<li class="divider"></li>
						<li><a href="#">Orthopedics services</a></li>
						<li class="divider"></li>
						<li><a href="#">Cardialogy services</a></li>
						</ul>
					</li>

					<li  class="active"><a href="#">Search</a></li>


					</ul>
				</div>
		</div>
	</nav>


<div class = "backgroundImage">
<div class = "back">
<div id ="con">
<form action="show.php" method="POST">

<div class ="inp">
<select name ="spec" class="inpt">
<option disabled selected>The Spectialization</option>
<option value ="Surgery Otolaryngology">Surgery Otolaryngology</option>
<option value ="Ophthalmology">Ophthalmology</option>
<option value ="Nephrology">Nephrology</option>
<option value ="Obstetrics Gynecology">Obstetrics Gynecology</option>
<option value ="Orthopedics">Orthopedics</option>
<option value ="Cardialogy">Cardialogy</option>
</select>

<br><br>
<select name ="cit" class="inpt">
<option disabled selected>The city</option>
<option value ="Qena">Cairo</option>
<option value ="Cairo">Assuit</option>
<option value ="El Minia">Giza</option>
<option value ="Asuit">Sohag</option>
 </select> <br>
 <input type ="submit" name ="submit" value ="Search" class = "sub"><br>
 </div>
</div>

	<section class = "footer">
			<div class = "container">
				<div class = "icons">
				<ul>
					<li><i class = "fa fa-facebook fa-lg"></i></li>
					<li><i class = "fa fa-twitter fa-lg"></i></li>
					<li><i class = "fa fa-google-plus fa-lg "></i></li>
					<li><i class = "fa fa-pinterest fa-lg "></i></li>
					<li><i class = "fa fa-instagram  fa-lg"></i></li>
					<li><i class = "fa fa-apple fa-lg "></i></li>
					<li><i class = "fa fa-rss fa-lg"></i></li>
					</ul>
					<span> &copy 2018 Aure Themes </span>
				</div>
			</div>
		</section>
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>


	</body>
</html>



