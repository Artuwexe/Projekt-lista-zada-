<?php


$link = @mysqli_connect("localhost", "root", "", "listazadan");

if(!$link)
  echo "Błąd w połączeniu";
else{
 $zadanie = $_POST["zadanie"];
    $data = $_POST["data"];
    $opis = $_POST["opis"];
    $progres = $_POST["progres"];
  
  echo "
  <table style='border: 2px solid black; border-collapse: collapse; width:100%;'>
  <tr>
     <th font-weight='bolder' style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#808000;'>id</th>
    <th font-weight='bolder' style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#C71585;'>zadanie</th>
    <th font-weight='bolder' style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#228B22;'>data</th>
    <th font-weight='bolder' style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#20B2AA;'>opis</th>
    <th font-weight='bolder' style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#20B2AA;'>progres</th>
    <th font-weight='bolder' style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#FF8C00;'>Zmień</th>
  </tr>
  <tr>
      <form method='POST' action='zmiana.php'>
       <td style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#808000;'><input style=type='hidden' value='$id' name='id1' required></td>
      <td style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#C71585;'><input style=type='text' value='$zadanie' name='zadanie1' required></td>
      <td style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#228B22;'><input style=type='text' value='$data' name='data1' required></td>
      <td style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#20B2AA;'><input style=type='text' value='$opis' name='opis1' required></td>
      <td style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#20B2AA;'><input style=type='text' value='$progres' name='progres1' required></td>
      <td style='padding: 5px; border: 2px solid black; border-collapse: collapse; background-color:#FF8C00;'><input type='submit' value='Zmien'></td>
      </form>
  </tr>
  </table>";
}

 ?>
