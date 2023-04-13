<!DOCTYPE html>
<html lang="en">
<head>
<title>LIS4381 - Simple Calculator</title>

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
					<div class="page-header">
						<?php include_once("global/header.php"); ?>	
					</div>

					<h2>Perform Calculation</h2>

						<form class = "form-horizontal" method="post" action="process_functions.php">
								<div class="form-group">
										<label class="control-label col-sm-2" for="num1">Num1:</label>
										<div class="col-sm-10">
												<input type="text" class="form-control" name="num1" id="num1" placeholder="Enter first number"/>
										</div>
								</div>

								<div class="form-group">
										<label class="control-label col-sm-2" for="num1">Num2:</label>
										<div class="col-sm-10">
												<input type="text" class="form-control" name="num2" id="num1" placeholder="Enter second number"/>
										</div>
								</div>
								
								<div class="form-group">
										<div class="col-sm-12">
										<label class="checkbox-inline">
											<input type="radio" name="operation" id="addition" value="addition" checked="true">addition
										</label>

										<div class="col-sm-12">
										<label class="checkbox-inline">
											<input type="radio" name="operation" id="subtraction" value="subtraction">subtraction
										</label>

										<div class="col-sm-12">
										<label class="checkbox-inline">
											<input type="radio" name="operation" id="multiplication" value="multiplication">multiplication
										</label>

										<div class="col-sm-12">
										<label class="checkbox-inline">
											<input type="radio" name="operation" id="division" value="division">division
										</label>

										<div class="col-sm-12">
										<label class="checkbox-inline">
											<input type="radio" name="operation" id="exponentation" value="exponentation">exponentation
										</label>
										
								</div>
							</div>		

							<div class = "form-group">
								<div class="col-sm-12">
									<button type = "submit" class = "btn btn-default" > Calculate</button>
								</div>
							</div>

						</form>

			<?php include_once "global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
			<?php include_once("../js/include_js.php"); ?>

<script type="text/javascript">
 //See Regular Expressions: http://www.qcitr.com/usefullinks.htm#lesson7
 $(document).ready(function() {
 }
</script>

</body>
</html>
