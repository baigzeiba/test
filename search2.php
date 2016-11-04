<!DOCTYPE html>
<html>
<head>

<style>

body {
	background-color: #f1f1f1;
	font-family: Helvetica,Arial,Verdana;

}
h1 {
	color: green;
	text-align: center;
}
.redfamily {
	color: red;	
}
.search-box,.close-icon,.search-wrapper {
	position: relative;
	padding: 10px;
}
.search-wrapper {
	width: 500px;
	margin: auto;
	margin-top: 50px;
}
.search-box {
	width: 80%;
	border: 1px solid #ccc;
  outline: 0;
  border-radius: 15px;
}
.search-box:focus {
	box-shadow: 0 0 15px 5px #b0e0ee;
	border: 2px solid #bebede;
}
.close-icon {
	border:1px solid transparent;
	background-color: transparent;
	display: inline-block;
	vertical-align: middle;
  outline: 0;
  cursor: pointer;
}
.close-icon:after {
	content: "X";
	display: block;
	width: 15px;
	height: 15px;
	position: absolute;
	background-color: #FA9595;
	z-index:1;
	right: 35px;
	top: 0;
	bottom: 0;
	margin: auto;
	padding: 2px;
	border-radius: 50%;
	text-align: center;
	color: white;
	font-weight: normal;
	font-size: 12px;
	box-shadow: 0 0 2px #E50F0F;
	cursor: pointer;
}
.search-box:not(:valid) ~ .close-icon {
	display: none;
}

</style>

	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<meta charset="utf-8">
  
</head>
<body>

 <h1>
	Textbox with a clear button completely in CSS <br> <span class="redfamily">< 0 lines of JavaScript ></span>
</h1>
<div class="search-wrapper">
	<form>
	<input type="text" name="focus" required class="search-box" placeholder="Enter search term" />
		<button class="close-icon" type="reset"></button>
	</form>
</div>

<script>  

</script>  
  
</body>
</html>