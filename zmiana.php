<?php

	
		$link = @mysqli_connect("localhost", "root", "", "listazadan");

		if(!$link)
			echo "Błąd w połączeniu";
		else{
			$zadanie = $_POST["zadanie"];
			$data = $_POST["data"];
			$opis = $_POST["opis"];
			$progres = $_POST["progres"];
			$id = $_POST["id1"];

		$query = "UPDATE `zadania` SET `zadanie` = '$zadanie', `data` = '$data', `opis` = '$opis', `progres` = '$progres'  WHERE `id` = $id";
		if(mysqli_query($link, $query))
  			echo "Udało się<br>Dane zostały zmienione<br><br>";
		else
  			echo "Błąd: ".mysqli_error($link);

		echo "<form action='lista1.php' method='POST'><input type='submit' value='Zobacz i edytuj bazę'></form>
		<form action='form.html' method='POST'><input type='submit' value='Dodaj następny'></form>";
	}

?>
