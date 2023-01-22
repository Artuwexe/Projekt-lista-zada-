<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lista z zadaniami</title>
	<link rel="stylesheet" type="text/css" href="lista1.css">
</head>
<body>
	<header>
<div class="menu">
	<div><h5>Lista z Zadaniami</h5></div>
</div>
</header>
<main>
<?php
//autoincrement do bazy
	$link = @mysqli_connect("localhost", "root", "", "listazadan");

	if(!$link)
		echo "Błąd w połączeniu";
	else{
		$q1 = "SELECT * FROM `zadania` WHERE skonczone=false";
		$query = $q1;
		if($result = mysqli_query($link, $query)){
			echo "<table class='tab'>
			<tr>
			<th>Nazwa</th>
			<th>data</th>
			<th>progres</th>
			<th>usun</th>
			<th>ukonczone</th>
			</tr>";
			while($wynik = mysqli_fetch_row($result)){
				echo "<tr>

					<td><input style='border: none' type='text' value='$wynik[1]' readonly name='zadanie' required><input style=type='hidden' value='$wynik[3]' name='opis'></td>
						<td><input style='border: none' type='date' value='$wynik[2]' readonly name='data' required></td>
						<form method='POST' action='edycja.php'>
						<td><input type ='submit' class='progres' value='klik'></td>
						</form>
						<form method='POST' action='usun.php'>
						<td><input type ='submit' class='usun' value='usun'></td>
						</form>
						<form method='POST' action='wyslij.php'>
						 <td style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#808000;'><input style=type='hidden' value='$id' name='id1' required></td>
						 <td><input type ='submit' class='koniec' value='Wyślij'></td>
						 </form>
				</tr>";
			}
			echo "</table><br>";
		}
		else
  			echo "Error: ".mysqli_error($link);
	}

?>
<form method="POST" action="dodawanie.php">
		<legend>stwórz nowy rekord</legend>
		<label>Nazwa zadania</label><input type="text" name="zadanie" required="" maxlength="30">
		<label>Data</label><input type="date" name="data" required="">
		<label>opis</label><input type="text" name="opis" required="">
		<label>progres</label><input type="text" name="progres" required="">
		<input type="submit" id="dod" value="dodaj">
		<input type="reset" id="usun" value="usuń">
		<br>
	</form>
	<form action="lista2.php">
<input type="submit" value="lista ukończonych zadań">
<br>
</main>
<footer>
	<div>copyrighted by Artur</div>
</footer>
</body>
</html>