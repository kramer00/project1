<!DOCTYPE html>
<html>
	<head>
		<title>Admin Website: Add New Page</title>

	</head>
	<body>
		<?php

		$db_link = mysqli_connect("localhost", "root", "root", "project1") or die("ERROR: could not connect" . mysqli_connect_error());

		if (isset($_POST['newTitle'])) {

			$insert_new_data = 'INSERT INTO pages (`title`) VALUES ("' . addslashes($_POST['newTitle']) . '")';
			mysqli_query($db_link, $insert_new_data);
		}

		if (isset($_POST['deleteTitle'])) {

			$clear_data = 'DELETE FROM pages WHERE id=' . addslashes($_POST['deleteTitle']);
			mysqli_query($db_link, $clear_data);
		}

		$pages_info = "SELECT * FROM pages";
		if ($result = mysqli_query($db_link, $pages_info)) {
			if (mysqli_num_rows($result) > 0) {
				echo "<ul>";
				echo "<li>&nbsp;&nbsp;<b>ID#</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>TITLE</b></li>";

				while ($row_content = mysqli_fetch_array($result)) {
					echo '<li>(&nbsp;#&nbsp;' . addslashes($row_content['id']) . '&nbsp;)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="update_form.php?id=' . addslashes($row_content['id']) . '">' . addslashes($row_content['title']) . '</a></li>';
				}
				echo "</ul>";
			}
		}
		?>
		<hr/>
		<form method="post">
			<h1>ADD Create New Page:</h1>
			<input type="text" name="newTitle" placeholder="Title of New Page" />
			<button type="submit">
				Add New Page
			</button>
		</form>
		<br />
		<hr />
		<form method="post">
			<h1>Delete Information: (Be Careful!)</h1>
			<label><h2>Enter ID#</h2></label>
			<input type="text" name="deleteTitle" placeholder="Enter ID# Here" />
			<br />
			<br />
			<input type="submit" value="Delete" />
		</form>
	</body>
</html>