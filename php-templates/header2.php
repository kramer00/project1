<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		
		<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script>
		function myFunction() {
			alert("It's a small Website! Just press 'Ctrl F'. What do you people expect from a rookie?!");
		}

	</script>
	</head>

<body>
	
	<div class="search"><input type="search" placeholder="search" />
		<button type="submit" onclick="myFunction()">GO</button>
	</div>

<h1 id="recipe-header"><?php echo $title; ?></h1>
<div class="recipe-container">
	<ul class="recipe-nav-list">
		<li>
			<a href="index1.php"><h2 class="recipe-hover-links">Home</h2></a>
		</li>
		<li>
			<a href="page2.php?id=2"><h2 class="recipe-hover-links">Recipes</h2></a>
		</li>
		<li>
			<a href="page3.php?id=5"><h2 class="recipe-hover-links">Contact</h2></a>
		</li>
		<li>
			<a href="http://www.facebook.com/login"><img class="recipe-hover-links" id="facebook-image" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTp8FdFMvwzJ0QjPsSyLN4tkZgrCjrq91AtMTgP-lH_-hrs1T0Vdw"</div></a>
		</li>
	</ul>
</div>