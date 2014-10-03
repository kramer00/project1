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

include 'php-templates/header1.php';
?>

<div class="main-content">
	<div id="gallery-images"></div>
	<div class="main-text">
		<h2>Welcome One Welcome All!</h2>
		<p>
			The neighborhood I am speaking of is located in Ladera Ranch, California.  For the last three years a group of six households have been wowing each other with weekend meals.  Under the recipe section you will find a list of fjkds
		</p>
		<p>
			ksjfkldjfklsadjfkldjsklfjdkslfkdsadffkjdlfkkkjklfsjkdkldffkkdfklj kdjsklafjdkslfjklsdajfkldsjfkl jfkdsjfk dskfjdskfj fjdkskfjskfkds jfdksljf kdslj. jdksla;jf dklsjfkld fujdsif jdskfdsidknfjkh idsjdjkldafiskldsdsdjljkdswa ij ad
		</p>
		<p>
			Thank you to all the following families. the foods been great.  I alway am looking forward to the weekend. jdsklajfkdl jdfskaj f jfkldsa kfldsa  jkljklsdkaf dfa fdskfjdkjfkdsj fdsjkfdj skalfjdsfkjsda;fikds dklfj kldsajfikd
		</p>
	</div>
</div>

<?php
include "php-templates/footer1.php";
?>