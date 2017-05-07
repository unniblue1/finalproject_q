<<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>To-Do</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
        
	      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
	      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
body{
	margin: 0;
	padding: 0;
	background: #fff;
        color: #fff;
	font-family: Arial;
	font-size: 12px;
}
.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);
	background-size: cover;
	-webkit-filter: blur(0px);
	z-index: 0;
}
.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); 
	z-index: 1;
	opacity: 0.7;
}
.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}
.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}
.header div span{
	color: #5379fa !important;
}
.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	background : #fff;
	box-shadow: 5px 5px 3px #2A2B2B;
	z-index : 5;
	height: 200px;
	width: 260px;
        padding: 10px;
	border-radius: 4px;
	z-index: 2;
}
.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(63, 127, 191,0.6);
	border-radius: 2px;
        color: #3F7FBF;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}
.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(63, 127, 191,0.6);
	border-radius: 2px;
	color: #3F7FBF;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #3498DB;
	border: 1px solid #3498DB;
	cursor: pointer;
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
	padding: 6px;
        margin-top: 10px;
}
.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(63, 127, 191,0.9);
}
.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(63, 127, 191,0.9);
}

.login input[type=button]:focus{
	outline: none;
}
::-webkit-input-placeholder{
        color: rgba(63, 127, 191,0.6);
}
::-moz-input-placeholder{
        color: rgba(63, 127, 191,0.6);
}
</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>To-Do</h1> 
  <p>We specialize in time management</p> 
</div>
</body>
</html>

