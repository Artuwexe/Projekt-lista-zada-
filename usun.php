<?php

	ob_start();
		$link = @mysqli_connect("localhost", "root", "", "Suplement");

		if(!$link)
			echo "Błąd w połączeniu";
		else{
			$nazwa = $_POST["nazwa"];
		$opis = $_POST["opis"];
		$cena = $_POST["cena"];

		$query = "DELETE FROM `dane` WHERE `nazwa` = '$nazwa' AND `cena` = '$cena' AND `opis` = '$opis'";
		if(mysqli_query($link, $query))
  			echo "Udało się<br>dane z listy zostały usunięte z bazy<br><br>";
		else
  			echo "Błąd: ".mysqli_error($link);

		echo "<form action='StronaAdmina.php' method='POST'><input type='submit' value='Zobacz i edytuj bazę'></form>";
	}

?>
