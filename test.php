<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php	
	$nilairapor = 200;
	echo "Nilai rapor = {$nilairapor} <br>";
		if ($nilairapor>=80&&$nilairapor<=100) { 
			echo "GRADE A";
	}
	else if ($nilairapor>=70&&$nilairapor<=79) {
			echo "GRADE B";
	}
	else if ($nilairapor>=60&&$nilairapor<=69) {
			echo "GRADE C";
	}
	else if ($nilairapor>=1&&$nilairapor<=59) {
		 	echo "GRADE D";
	}
	else { 
		echo "Nilai harus diantara 1 - 100 ";
	}
	?>
</body>
</html>