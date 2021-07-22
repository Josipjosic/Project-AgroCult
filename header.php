<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Project Class</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" href="js/flexslider/flexslider.css" type="text/css">
	<link rel="stylesheet" href="js/validate/screen.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript">
		var j62 = $.noConflict(true);
	</script>
	<script src="js/validate/jquery-3.1.1.js"></script>
	<script src="js/validate/jquery.validate.js"></script>
	<script type="text/javascript">
		var j31 = $.noConflict(true);
	</script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		var j12 = $.noConflict(true);
	</script>
	
</head>
<body>
	<script type="text/javascript">
		j62( document ).ready(function() {
				j62('.flexslider').flexslider({
				animation: "slide",
				animationLoop: false,
				itemWidth: 300,
				itemMargin: 5
			  });
		});
	</script>
	<div id="divMainHeaderBar"> <!--Header Nav Bar section-->
		<div id="divMainMenuWrap"> <!--Header Nav Menu section-->
			<div id="divMainMenu">
				<div id="divMainMenuCol1">
					<img src="Images/Logo.png">
				</div>
				<div id="divMainMenuCol2">
					<ul class="mainMenu1">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">News</a></li>
						<li>
							<a href="#">Products</a>
							<ul>
								<li><a href="#">Case IH</a></li>
								<li><a href="#">Class</a></li>
								<li><a href="#">Fendt</a></li>
								<li><a href="#">John Deere</a></li>
								<li><a href="#">Massey Ferguson</a></li>
							</ul>
						</li>
						<li><a href="#">Featured</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div> <!--Header Nav Menu section END-->
	</div> <!--Header Nav Bar section-->
	<div id="divMainHeaderWrap">  <!--Main Header + slider -->
		<h1 id="divMainHeaderTitle">Welcome to project <br><span>AgroCult</span></h1>
		<div id="divMainHeader">
			<div class="flexslider">
				<ul class="slides">
				<li>
					<img src="Images/MF.jpg">
				</li>
				<li>
					<img src="Images/JD.jpg">
				</li>
				<li>
					<img src="Images/FD.jpg">
				</li>
				<li>
					<img src="Images/Class.jpg">
				</li>
				<li>
					<img src="Images/Case.jpg">
				</li>
				<li>
					<img src="Images/ZT.jpg">
				</li>
				</ul>
			</div>
		</div>
	</div> <!--Main Header + slider END -->
	<div id="divHeaderButton">
		<a href="#">Buy Now</a>
	</div> <!--END OF HEADER-->