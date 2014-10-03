<!DOCTYPE html>
<html>
	<head>
		<title>My HTML & CSS Progress talk to me goose</title>

		<link rel="stylesheet" type="text/css" href="css/main.css" />

		<script>
			function myFunction() {
				alert("It's a small Website! Just press 'Ctrl F'. What do you people expect from a rookie?!");
			}
		</script>

	</head>

	<body>

		<div id="main-layout-container">
			<div id="header">
				<img id="main-logo" src="http://s3-media3.fl.yelpcdn.com/bphoto/59ASlUGJLV_c9X768Bh3gA/ls.jpg" />
			</div>

			<div class="content-container">
				<div class="search">
					<input type="search" placeholder="search" />
					<button type="submit" onclick="myFunction()">
						GO
					</button>
				</div>
				<div class="side-nav-container">
					<h1 class="nav-title">The Neighborhood</h1>
					<ul class="nav-list">
						<li>
							<a href="index1.php"><h2 class="hover-links">Home</h2></a>
						</li>
						<li>
							<a href="page2.php?id=2"><h2 class="hover-links">Recipes</h2></a>
						</li>
						<li>
							<a href="page3.php?id=5"><h2 class="hover-links">Contact</h2></a>
						</li>
						<li>
							<a href="http://www.facebook.com/login"><img class="hover-links" id="facebook-image" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTp8FdFMvwzJ0QjPsSyLN4tkZgrCjrq91AtMTgP-lH_-hrs1T0Vdw"
				</div></a>
				</li>
				</ul>

			</div>
