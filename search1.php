<!DOCTYPE html>
<html>
<head>

<style>
.clearable{
  background: #fff url(data:image/gif;base64,R0lGODlhBwAHAIAAAP///5KSkiH5BAAAAAAALAAAAAAHAAcAAAIMTICmsGrIXnLxuDMLADs=) no-repeat right -10px center;
  border: 1px solid #999;
  padding: 3px 18px 3px 4px; /* Use the same right padding (18) in jQ! */
  border-radius: 3px;
  transition: background 0.4s;
}
.clearable.x  {
	background-position: right 5px center;
}

.clearable.onX{ 
	cursor: pointer; 
}
.clearable::-ms-clear {
	display: none; 
	width:0; 
	height:0;
}



</style>

<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
  <meta charset="utf-8">
  <title>Demo by Roko C.B.</title>
</head>
<body>

  
  <h1>Clear icon inside Input field</h1>

<input class="clearable" type="text" name="" value="" placeholder="Enter a Search term" />  


<script>  
jQuery(function($) {

  // CLEARABLE INPUT
	function tog(v){
		return v?'addClass':'removeClass';
	} 
		
	$(document).on('input', '.clearable', function(){
		$(this)[tog(this.value)]('x');
	}).on('mousemove', '.x', function( e ){
		
		$(this)[tog(this.offsetWidth-18 < e.clientX-this.getBoundingClientRect().left)]('onX');   
	}).on('touchstart click', '.onX', function( ev ){
		ev.preventDefault();
		$(this).removeClass('x onX').val('').change();
	});

 
});


</script>  
  
</body>
</html>