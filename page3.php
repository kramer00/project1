<?php
include_once 'config/constants.php';
include_once 'config/database.php';

$page_id = (int)$_GET['id'];
$page_query = 'SELECT * FROM `pages` WHERE id=' . $page_id;

$page_info = mysql_query($page_query);
while ($row = mysql_fetch_assoc($page_info)) {
	$title = $row['title'];
	$content1 = $row['content1'];
	$content2 = $row['content2'];
}

include 'php-templates/header2.php';
?>

<div class="recipe-text">

<?php echo $content1; ?>

</div>
<div class="clear-float"></div>

<div class="form-container">
	<form class="personal-info">
		<div class="contact-info" id="firstName">
			First Name:
			<input id="field-adjust-left" class="field-size" type="text" name="firstName" placeholder="First Name" />
		</div>
		<div class="contact-info" id="lastName">
			Last Name:
			<input class="field-size" type="text" name="lastName" placeholder="Last Name" />
		</div>
		<div class="contact-info" id="area">
			Area:
			<input id="field-size-right" class="field-size" type="text" name="area" placeholder="City, State" />
		</div>
		<div class="contact-info" id="newRecipe">
			Send Us Your Best:
			<textarea class="field-adjust" type="text" name="resipe" placeholder="Send us a favorite resipe" />
			</textarea>
		</div>
	</form>
	<button id="button" type="submit" onclick="submit()">
		Send
	</button>
</div>

<?php
include 'php-templates/footer2.php';
?>
