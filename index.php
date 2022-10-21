<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
table{
 border-collapse:collapse;
}
th,td{
 width:75px;
 text-align:center;
}
  </style>
</head>
<body>
<table border="1">
 
<?php

	for( $i = 1 ; $i <= 9 ; $i++ ){
 
		echo "<tr>";
 
		for( $j = 1 ; $j <= 9 ; $j++ ){
			
			echo "<td>";

			if( $i * $j < 10) echo "&nbsp;";
	
			echo $i * $j;
 
			echo "</td>";
		}

		echo "</tr>";
	}
 
?>
</table>
</body>
</html>