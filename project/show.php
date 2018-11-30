<html>
<head>
	<meta charset=UTF-8>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet"  href="css/font-awesome.min.css">
		<link rel="stylesheet"  href="css/index.css">
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
</head>
	<body style="">
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
					<li class="active"><a href="#">Home</a></li>

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

					<li><a href="form.php">Search</a></li>


					</ul>
				</div>
		</div>
	</nav>


	<?php

		echo"<h2 class = 'head'>Information about the doctor</h2>";
		include "class.php";
                $t='';
		if(isset($_POST['submit']))
                {
			$dep = $_POST['spec'];
			$ace = $_POST['cit'];
			$q ="SELECT*FROM Doctor where Spectialization=? and City=?";
			$rows = $db->getRows($q,array($dep,$ace));

	                foreach($rows as $ros =>$v)
	                 {
	                    $t.='<tr><th>'.$v['Name'].'</td><th>'.$v['Address'].'</th><th>'.$v['Phone'].'</th><th>'.$v['Appointments'].'</th></tr>';
	                 }
                }

	?>
	<div class = "backgroundImage">
	<div class = "back">
		<div class = "table">
			<table border = "1">
						<tr>
						<th>Doctor_name</th>
						<th>Add</th>
						<th>Phone</th>
						<th>Appointments</th>
						</tr>
						<?php echo $t; ?>
					</table>
			</div>
		</div>
	</div>
			<section class = "footer foot">
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
