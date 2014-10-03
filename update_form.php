<!DOCTYPE html>
<html>
	<head>
		<title>Admin Website: Update</title>
		<?php

		$page_id = $_GET['id'];

		$db_link = mysqli_connect("localhost", "root", "root", "project1") or die("ERROR: could not connect" . mysqli_connect_error());

		if (isset($_POST['title'])) {
			$sql = 'UPDATE pages 
		SET
			`title` = "' . addslashes($_POST['title']) . '",
			`content1` = "' . addslashes($_POST['editor1']) . '",
			`content2` = "' . addslashes($_POST['editor2']) . '"
		WHERE 
			`id` = ' . $page_id;
			mysqli_query($db_link, $sql);
		}

		$pages_info = "SELECT * FROM pages WHERE id=" . $page_id;
		if ($result = mysqli_query($db_link, $pages_info)) {
			if (mysqli_num_rows($result) > 0) {
				echo "<ul>";
				echo "<li>table</li>";

				while ($row_content = mysqli_fetch_array($result)) {
					$title = $row_content['title'];
					$content1 = $row_content['content1'];
					$content2 = $row_content['content2'];
				}
			}
		}
		?>
	</head>
	<body>
		<form method="post" action="">
			<h1>UPDATE Information:</h1>
			<label><h2>Title</h2></label>
			<input type="text" name="title" value="<?php echo $title; ?>" />
			<br />
			<label><h2>Content1</h2></label>
			<textarea type="text" name="editor1"><?php echo $content1; ?></textarea>
			<br />
			<label><h2>Content2</h2></label>
			<textarea type="text" name="editor2"><?php echo $content2; ?></textarea>
			<br />
			<br />
			<input type="submit" value="update" />
		</form>
	</body>
</html>