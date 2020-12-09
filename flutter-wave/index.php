
<!DOCTYPE html>
<html>
<head>
	<title>Pay</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<form method="post" action="process.php" class="mt-4">
		  <div class="form-row">

		    <div class="form-group col-md-6">
		      <input type="text" name="fullname" class="form-control" id="inputEmail4" placeholder="Name">
		    </div>
		    <div class="form-group col-md-6">
		      <input type="email" name="email" id class="form-control" placeholder="Email">
		    </div>

		  </div>

			<div class="for`m-row">
				<div class="form-group col-md-12">
					<select name="amount" class="form">
	          <option value="1000">Basic</option>
	          <option value="2000">Regular</option>
	          <option value="3000">Master</option>
					</select>
				</div>
			</div>



		  <button type="submit" name="submit" class="btn btn-primary|secondary|success|danger|warning|info|light|dark btn-sm|btn-lg">Sign in</button>
		</form>
	</div>





<script src="boostrap.js"></script>
</body>
</html>
