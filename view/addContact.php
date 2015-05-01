<html>
<head>
	<title>
		Add a Contact
	</title>
	<link rel="stylesheet" type="text/css" href="../public/css/homeStyle.css">
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<script type="text/javascript" src="../public/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../public/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../public/js/effect.js"></script>
</head>
<body>
	<div class="container">
		<div class="conBox">
			<div class="row text">
				<b>
					Contact Details
				</b>
			</div>
			<div class="innerBox conDet">
				<form action="../index.php" method="POST">
					<div class="row inf">
						<div class="form-group col-md-11 col-sm-11 col-xs-11">
	    					<input type="textbox" class="form-control" id="name" name="name" placeholder="Name">
	  					</div>
  					</div>
  					<div class="row inf">
						<div class="form-group col-md-11 col-sm-11 col-xs-11">
	    					<input type="textbox" class="form-control" id="phone" name="phone" placeholder="Phone Number">
	  					</div>
  					</div>
					<div class="add save row">
						<button type="submit" name ="addCon" onclick='return validate();'>
							<img src="../public/images/add.png">
							<b>
								Add Now
							</b>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../public/js/contactVal.js"></script>
</body>
</html>