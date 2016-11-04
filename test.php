<html>


 <head>
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"
        />
        <link rel="shortcut icon" type="image/png" href="favicon.png" />
        <link rel="stylesheet" type="text/css" href="../test/bootstrap/css/bootstrap.min.css"
        />
        <link rel="stylesheet" type="text/css" href="../test/bootstrap/css/style.css" />
        <link rel="stylesheet" href="../test/bootstrap/css/animate.min.css" />
        <link rel="stylesheet" href="../test/bootstrap/css/ionicons.min.css" />
        <link rel="stylesheet" href="../test/bootstrap/css/font-awesome.min.css" />
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin,latin-ext"
        rel="stylesheet" type="text/css" />
		
		<script src="../test/bootstrap/js/jquery-2.1.0.min.js"></script>
		<script src="../test/bootstrap/js/bootstrap.min.js"></script>
		<script src="../test/bootstrap/js/blocs.min.js"></script> 
		
		
		
        <title>nav</title>
    </head>



	<body>
	
<!-- overlay -->
	 <a class="signup-link">sign up</a>
	
	<div id="signup-link">
		<div id="signup-content"  class="overlay-login-signup">
			<a class="closebtn" id="close-signup-form">×</a>
			<div class="overlay-content-signup">
				<div class="container">
					<div class="row">
						<h5> hi </h5>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
	</div>

	
	
	<script>
			$(document).ready(function(){

				//OPEN.
				$('.signup-link').click(function(){
					$('#signup-content').css({
						'height':'100%'
					});
				});
				//CLOSE.
				$('#close-signup-form').click(function(){
					$('#signup-content').css({
						'height':'0%'
					});
				});

			});
		</script>


	
		
	</body>
</html>