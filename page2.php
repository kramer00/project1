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
	<?php
	echo $content1;
?>
</div>
<div class="clear-float"></div>

<?php echo $content2; ?>

<?php
include 'php-templates/footer2.php';
?>
