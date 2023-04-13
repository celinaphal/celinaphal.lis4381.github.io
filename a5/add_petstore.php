<!DOCTYPE html>
<html lang="en">
<head>
<title>LIS4381 - Assignment 5</title>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Celina Phal">
	<link rel="icon" href="favicon.ico">

		<?php include_once("../css/include_css.php"); ?>
</head>
<body>

	<?php include_once("../global/nav.php"); ?>

	<div class="container">
		<div class="starter-template">
			<div class = "col-xs-12">
					<div class="page-header">
						<?php include_once("global/header.php"); ?>	
					</div>

					<h2>Pet Stores</h2>

					<?php //test ?>
						<form id="add_petstore" method="post" class="form-horizontal" action="add_petstore_process.php">
								<div class="form-group">
										<label class="col-sm-4 control-label">Name:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" placeholder = "(max 30 characters)" name="name" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label">Street:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" placeholder = "(max 30 characters)" name="street" />
										</div>
								</div>
								
								<div class="form-group">
										<label class="col-sm-4 control-label">City:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" placeholder = "(max 30 characters)" name="city" />
										</div>
								</div>

								
								<div class="form-group">
										<label class="col-sm-4 control-label">State:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Example: FL" name="state" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label">Zip:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" placeholder = "(5 or 9 digits no dashes" name="zip" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label">Phone:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" placeholder = "(10 digits no other characters)" name="phone" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label">Email:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" placeholder = "Example: jdoe@aol.com" name="email" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label">URL:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" placeholder = "Example: www.jdoe.com" name="url" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label">YTD Sales:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" placeholder = "Example: 100.000 (no other characters)" name="ytdsales" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label">Notes:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" name="notes" />
										</div>
								</div>

								<div class="form-group">
									<div class="col-sm-6 col-sm-offset-3">
									<button type="submit" class="btn btn-primary" name="add" value="Add">Add</button>
										</div>
								</div>
						</form>

			<?php include_once "global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
			<?php //include_once("../js/include_js.php"); ?>

<script type="text/javascript">
 //See Regular Expressions: http://www.qcitr.com/usefullinks.htm#lesson7
 $(document).ready(function() {

	$('#add_petstore').formValidation({
			message: 'This value is not valid',
			icon: {
					valid: 'fa fa-check',
					invalid: 'fa fa-times',
					validating: 'fa fa-refresh'
			},
			fields: {
					name: {
							validators: {
									notEmpty: {
									 message: 'Name required'
									},
									stringLength: {
											min: 1,
											max: 30,
									 message: 'Name no more than 30 characters'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z0-9\-_\s]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[\w\-\s]+$/,
										message: 'Name can only contain letters, numbers, hyphens, and underscore'
									},									
							},
					},

					street: {
							validators: {
									notEmpty: {
											message: 'Street required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'Street no more than 30 characters'
									},
									regexp: {
										//street: only letters, numbers, commas, hyphens, space character, and periods
										regexp: /^[a-zA-Z0-9,\-\s\.]+$/,		
									message: 'Street can only contain letters, numbers, commas, hyphens, or periods'
									},									
							},
					},

					city: {
							validators: {
									notEmpty: {
											message: 'City required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'City no more than 30 characters'
									},
									regexp: {
										regexp: /^[a-zA-Z0-9\-\s]+$/,		
									message: 'City can only contain letters, numbers, hyphens, and space character'
									},									
							},
					},

					
					state: {
							validators: {
									notEmpty: {
											message: 'State required'
									},
									stringLength: {
											min: 2,
											max: 2,
											message: 'State must be 2 characters'
									},
									regexp: {
										regexp: /^[a-zA-Z]+$/,	
									message: 'State can only contain letters'
									},									
							},
					},

					zip: {
							validators: {
									notEmpty: {
											message: 'Zip required, onlu numbers'
									},
									stringLength: {
											min: 5,
											max: 9,
											message: 'Zip must be 5, and no more than 9 digits'
									},
									regexp: {
										regexp: /^[0-9]+$/,	
									message: 'Zip can only contain numbers'
									},									
							},
					},

					phone: {
							validators: {
									notEmpty: {
											message: 'Phone required, including area code, only numbers'
									},
									stringLength: {
											min: 10,
											max: 10,
											message: 'Phone must be 10 digits'
									},
									regexp: {
										regexp: /^[0-9]+$/,	
									message: 'Phone can only contain numbers'
									},									
							},
					},

					email: {
							validators: {
									notEmpty: {
											message: 'Email address is required'
									},
									stringLength: {
											min: 1,
											max: 100,
											message: 'Email no more than 100 characters'
									},
									regexp: {
										regexp: /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/,
									message: 'Must include valid email'
									},									
							},
					},

					url: {
							validators: {
									notEmpty: {
											message: 'URL required'
									},
									stringLength: {
											min: 1,
											max: 100,
											message: 'URL no more than 100 characters'
									},
									regexp: {
										regexp: /^(https?:\/\/)?([\da-z.\-]+)\.([a-z\.]{2,6})([\/\w\.-]*)*\/?$/,	
									message: 'Must include valid URL'
									},									
							},
					},
					ytdsales: {
							validators: {
									notEmpty: {
											message: 'YTD sales is required'
									},
									stringLength: {
											min: 1,
											max: 11,
											message: 'YTD sales can be no more than 10 digits, including decimal point'
									},
									regexp: {
										regexp: /^[0-9\.]+$/,	
									message: 'YTD sales can only contain numbers and decimal point'
									},									
							},
					},
				}
	});
});
</script>

</body>
</html>