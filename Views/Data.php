<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Calculator</title>
</head>
<body class="bg-info-subtle">
	
	<?php
		include('index.php');
		require('../Logic/DataConverter.php');
	?>

	<h1 class="d-flex justify-content-center">Data Calculator</h1>
	<div class="container">
	<form method="POST">
		<label for="input_amount">Amount</label><br/>
		<input type="number" name="amount" id="input_amount" required><br/><br/>

		<label for="input_initial">Initial Unit</label>
		<select name="initial_unit" id="input_initial">
			<option value="bytes">Bytes</option>
			<option value="kilobytes">Kilobytes</option>
			<option value="megabytes">Megabytes</option>
			<option value="gigabytes">Gigabytes</option>
			<option value="terabytes">Terabytes</option>
		</select>

		<label for="input_final">Convert To</label>
		<select name="final_unit" id="input_final">
			<option value="bytes">Bytes</option>
			<option value="kilobytes">Kilobytes</option>
			<option value="megabytes">Megabytes</option>
			<option value="gigabytes">Gigabytes</option>
			<option value="terabytes">Terabytes</option>
		</select>

		<input class="btn btn-success" type="submit" name="submit">
	</form>
	</div>

</body>
</html>