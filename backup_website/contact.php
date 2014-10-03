<?php
include 'php-templates/header2.php';
?>

<div class="recipe-text">
	<h2>We Are Here...</h2>
	<p>
		You will find our neighorhoods best recipes.  It's simple to navigate, just click on Breakfast, Lunch, or Dinner ect... for general choices.  But, if you notice an image that gets your tastbuds watering, Click on the Picture.  You will be directed to see the list of ingreedents as well at cooking instruction.
	</p>
	<p>
		Nothing fancy here, we are your everyday family's and can't afford the best cookware.  Everything you find in our recipe will be able to purchase from your local store.  There is more to come but I just don't know what else to say at this time.
	</p>
	<p id="right">
		Thank You!!
	</p>
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
