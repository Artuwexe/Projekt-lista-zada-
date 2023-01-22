<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lista z zadaniami</title>
	<link rel="stylesheet" type="text/css" href="lista2.css">
</head>
<body>
	<header>
<div class="menu">
	<div><h5>Lista ukończonych zadań</h5></div>
</div>
</header>
<main>
<?php
//autoincrement do bazy
	$link = @mysqli_connect("localhost", "root", "", "listazadan");

	if(!$link)
		echo "Błąd w połączeniu";
	else{
		$q1 = "SELECT * FROM `zadania` WHERE skonczone=true";
		$query = $q1;
		if($result = mysqli_query($link, $query)){
			echo "<table class='tab'>
			<tr>
			<th>Nazwa</th>
			<th>data</th>
			<th>usun</th>
			</tr>";
			while($wynik = mysqli_fetch_row($result)){
				echo "<tr>

					<td><input style='border: none' type='text' value='$wynik[1]' readonly name='zadanie' required><input style=type='hidden' value='$wynik[3]' name='opis'></td>
						<td><input style='border: none' type='date' value='$wynik[2]' readonly name='data' required></td>
						<form method='POST' action='usun.php'>
						<td><input type ='submit' class='usun' value='usun'></td>
						</form>
						 </form>
				</tr>";
			}
			echo "</table><br>";
		}
		else
  			echo "Error: ".mysqli_error($link);
	}

?>
	<form action="lista1.php">
<input type="submit" value="lista bieżących zadań">
<br>
</main>
<footer>
	<div>copyrighted by Artur</div>
</footer>
</body>
</html>