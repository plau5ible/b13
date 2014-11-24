

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table</title>
</head>
<body>

	<table cellspacing="0" cellpadding="4" border="1">
	<?php

	for ($i=0; $i <=10; $i++) {
	echo "<tr>";

		for ($j=0; $j <=10; $j++){

			echo "<td>" ;
			if ($i == 0 && $j == 0) {
				echo "";
			} elseif ($i == 0) {
				echo $j;
			} elseif ($j == 0) {
				echo $i;
			} else {
				echo $i * $j; 
			}
			echo "</td>";
		}
		echo "</tr>";
	}
?>
</table>
</body>
</html>