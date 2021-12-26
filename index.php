<!DOCTYPE HTML>
<!-- This is how HTML comments look like -->
<html>
<!-- the title will appear on the page-->
<style>
@import url('https://fonts.googleapis.com/css2?family=Caveat&family=Chakra+Petch:wght@300&family=Dancing+Script&family=Exo+2:wght@100&family=Indie+Flower&family=Lobster&family=Luxurious+Roman&family=Public+Sans:wght@100&family=Pushster&family=Righteous&family=Twinkle+Star&display=swap');
</style>
  <link rel="icon" type="image/x-icon" href="rest.ico">
<head>
<title>Book a Table Now</title>
</head>
<body>

	<style>
		.bod{
			background-color: #F9C5D5;
			font-family: 'Public Sans', sans-serif;
			color: #1A374D;
			text-decoration: bold;
			font-size: 20px;
		}
		.home{
			text-align: left;
		color: red;
		text-decoration: none;
		margin-left: 1200px;
		font-family: 'Righteous', cursive;

		}

	</style>
	<div class="bod">


<!-- as it is a survey form, we will need to submit the details, hence we use form -->
<!-- We can give absolute url, or relative url like /nextpage.jsp, and specify POST or GET method -->
<form action="http://google.co.in">
<!-- If we remove this, every thing will move to the left of the page-->
<div align="center">
		<a class="home"href="new2.html">Home Page</a>
<!--Adds a heading to the form-->
<h1>Book a Table Now</h1>
Enter your name:
<!-- Input type text for small texts, specify size -->
<input type="text" name="UserName" size=35 maxlength=35 value="">
<!--Adds spaces - remove and see what happens -->
</br></br>
Your Location:
<input type="text" name="Deptt" size=35 maxlength=35 value=""> </br> </br>
Tell us a little about yourself:
<!-- For writing lot of text like descriptions with text wrapping,
if you dont want text wrapping, you can add wrap = "off" (horizontal scrollbar -->
<textarea name="Comments" cols=30 rows=4></textarea> </br> </br>
Will You Arrive on Time:
<!-- Radio buttons help you choose one out of the many values -->
<input type="radio" name="exe" value=1>Yes
<input type="radio" name="exe" value=2>No
</p>
What do you like in our Menu?
<p>
<!--Checkbox lets you select multiple options -->
<input type="checkbox" name="Books">Lunch & Dinner
<input type="checkbox" name="Web">Breakfast
<input type="checkbox" name="Phone">Environmnet
<input type="checkbox" name="Magazines">All
</p>
How much time would you spend sitting with us?
<!--Select box lets you choose one of the multiple dropdown options-->
<select name="moviepref" ><option>
<option value=1 >Half Hour
<option value=2 >1 Hour
<option value=3 >1.5 Hour
<option value=4 >2+ Hours
<option value=5 >Whole Day
</select>
</br></br>
<!--submits the information entered in the form by the user -->
<input type=submit value="Submit form">
</div>
</form>
	</div>
</body>
</html>
