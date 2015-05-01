<?php
	require 'connection.php';
?>
<html>
	<head>
		<title>
			Listing Page
		</title>
		<link rel="stylesheet" type="text/css" href="public/css/homeStyle.css">
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
		<script type="text/javascript" src="public/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="public/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="public/js/effect.js"></script>
		<script type="text/javascript">
			function confirmation(){
				return confirm('Sure to delete?');
			}
		</script>
	</head>
	<body>
		<div class="container">
				<?php if(!empty($err)){
					echo '<div class="error col-md-offset-3 col-md-6 col-sm-6">'.
							$err.
						 '</div>';
					} 
				?>
			<div class="conBox">
				<div class="row text">
					<b>
						Contact Details
					</b>
				</div>
				<div class="innerBox">
					<div class="scroll">
						<?php 
							if(empty($contacts)){
								echo '<div class="conDetails col-md-offset-2 col-md-8 col-sm-8 col-xs-8">
										<b>
											No contacts to display
										</b>
									 </div>';
							}
							else{
								foreach ($contacts as $name =>$contact) {
									$name = $contact->name;
									$phone = $contact->phone;
									$rowName = ucfirst($name);
									echo "<form action='index.php' method='POST'>";
									echo '<div class="row info">
											<div class="conIcon col-md-2 col-sm-2 col-xs-2">
												<img src="public/images/conIcon.png">
											</div>
											<div class="conDetails col-md-7 col-sm-7 col-xs-7">
												<b>'
													.$rowName.
												'</b>
												</br>
												<div class="phone">'
													.$phone. 
												'</div>
											</div>';
										echo "<input type='hidden' style='display:none' name='namey' value='$name' />
			                                <input type='hidden' style='display:none' name='phoney' value='$phone' />";
										echo '<div class="del col-md-3 col-sm-3 col-xs-3">
												<button type="submit" name="delete" onclick="return confirmation();"">
													<img class="imgg" src="public/images/delete.png">
												</button>
											  </div>
										   </div>';
									echo "</form>";
								}
							}
						?>
					</div>
					<div class="add row">
						<a id="addCon" href="view/addContact.php">
							<img src="public/images/add.png">
							<b>
								Add Contact
							</b>
						</a>
					</div>
				</div>
			</div>
		</div>
		<script>
			$('.phone').text(function(i, text) {
			    return text.replace(/(\d{2})(\d{4})(\d{4})/, '$1 $2 $3');
			});
		</script>
	</body>
</html>
<?php
	mysql_close($conn);
?>