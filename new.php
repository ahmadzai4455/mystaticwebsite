<html>
<head>
	<style>
	*{
	margin:0; padding:0; boxsizing:border-box;
	}
	header{
	width: 100%; height: 100vh;
	background-color: white;
	background-repeat: no-repeat;
	background-size: cover;
	}
	nav{
	width: 100%; height: 15vh;
	background: black;
	display: flex; justify-content: space-between;
	align-items: center;
	}
	nav .mainmenu{
	width: 40%;
	display: flex; justify-content: space-around;
	}
	main{
	width: 100%; height: 85vh;
	display: flex; justify-content: center;
	align-items: center;
	text-align: center;
	}
	section h3{
	letter-spacing: 3px; font-weight: 200;
	}
	section h1{
	text-transform: uppercase;
	}
	section div{
	animation:changeborder 10s infinite linear;
	border: 7px solid red;
	}
	@keyframes changeborder{
	0%
	20%
	40%
	}
	</style>
	</head>
	<body>
	<!--Let us create a simple menu using the navigation tags-->
	<!--Use header to indicate that manu will be a part of header -->
	<header>
	<nav>
	<div class = "logo" <h3 style="color:white;">MYLOGO</h3></div>
	<!--Lets define the menu items now-->
	<div class = "mainmenu">
	<a href="https://hackr.io/tutorials/learn-html-5">Home</a>
	<a href="https://hackr.io/tutorials/learn-html-5">About Us</a>
	<a href="https://hackr.io/tutorials/learn-html-5">Contact Us</a>
	</div>
	</nav>
	<!--Let us create the main section now, if you are not using html5, use div tags-->
	<main>
	<section>
	<!--Check out the styling elements for this div class - change_text -->
	<div class = "change_text"><b>WELCOME TO XXX ELECTRONICS</b></div>
	<!--make text italic-->
	<p><i>All your electronics needs in one place</i></p><br>
	<!--create a button, if there is a form, you can specify an action on click-->
	<input type = button value = "view more">
	</section>
	</main>
	</header>
    <style>
        body{
   font-size:20px;
            color: white;
            background-size: cover;
        }
         .box{ width: 900px;
       float:right;
       border:1px solid none;}
       .box ul li{
           width: 120px;
           float:left;
           margin: 10px auto;
           text-align: center;
       }
 .mainmenu
.mainmenu a
.mainmenu a:hover
.mainmenu img{
position: fixed;
z-index: -1;
top:0px; left:0px; width:100%; height: 100vh;
opacity: 0.9;
/*object-fit:cover;*/
transition: all ease 0.5s;
}
   .wd{
           width: 300px;
           height: 539px;
           background-color: black;
           opacity: 0.8;
           padding: 55px;
       }
       .wd h1{
           text-align: center;
           text-transform: uppercase;
           font-weight: 300px;
       }
       .wd h4{
           text-align: justify;
           color:darkgray;
           font-weight: 100px;
       }
       .wd h2{
           text-align: center;
           text-transform: uppercase;
           font-weight: normal;
           margin: 40px auto;
       }
       .opt form , input[type="button"]{
           background-color: black;
           color:white;
         /* padding:10px;*/
           margin:-14px auto;
           padding-left: 50px;
           padding-right: 50px;
           text-align: center;
           font-size: 16px;
       }
     form, input[type="button"] {
       animation: glowing 300ms infinite;
       font-weight: 500%;
      }
      @keyframes glowing {
 0% {
   background-color: red;
 }
 50% {
   background-color: orange;
 }
 100% {
   background-color: blue;
 }
}
   </style>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function(){
var image = $(".mainmenu").find('img').attr('src');
$(".mainmenu a").mouseover(function(){
var newimg = $(this).attr('data-image');
$(this).parent().find('img').attr("src", newimg);
});
});
</script>
   <div class="box">
<div class="mainmenu">
<img src="food.png">
<a data-image = "food.png" href=""> Home</a>
<a data-image = "menucard.jpg" href=""> Menu</a>
<a href=""> FAQ</a>
<a href=""> Contact</a>
</div>
   </div>
   <div class="wd">
<h1> Welcome to xxx</h1>
<h4> <i>Order delicious food online, 100% quality, safety and taste assured.</i></h4>
<h2> Call 999999999 for reservations</h2>
<div class="opt">
<form action="" method="post">
<input type="button" value="ORDER NOW">
</form>
</div>
</div>
</body>
</html>
