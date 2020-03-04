<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>blog</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	</head>
	<body>
		<?php include("navbar.php"); ?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
					<form method = "post" enctype="multipart/form-data" action = "{{ route('addUpload')}}">
						@csrf
						<h2>Player</h2>
						<input class="player" type="text" name="player">
						<h2>Description</h2>
						<textarea class="desc" name="description"></textarea>
						<input type="file" name="image">
						<input type="submit" value="Submit" name="upload">
					</form>
				</div>
				<div class="col-2"></div>
			</div>
		</div>

	</body>
</html>