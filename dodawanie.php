<?php
	ob_start();
	$link = @mysqli_connect("localhost", "root", "", "listazadan");

	if(!$link)
		echo "Błąd w połączeniu";
	else{
		$zadanie = $_POST["zadanie"];
		$data = $_POST["data"];
		$opis = $_POST["opis"];
		$progres = $_POST["progres"];
    
		$query = "INSERT INTO `zadania` (`zadanie`, `data`, `opis`, `progres`, `skonczone`) VALUES ('$zadanie', '$data', '$opis', '$progres', 'false')";
		if(mysqli_query($link, $query))
  			echo "<br>Dane zadania: $zadanie $data $opis $progres. zostały dodane<br><br>";
		else
  			echo "blad: ".mysqli_error($link);

		echo "<form action='lista1.php' method='POST'><input type='submit' value='Zobacz bazę' style=></form>";
	}
?>
