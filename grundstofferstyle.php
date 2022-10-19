<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Grundstoffer</title>
</head>
<body>
<h1>Grundstoffer</h1>
<table>
  <tr>
    <th>Nr</th>
    <th>Navn</th>
    <th>Symbol</th>
  </tr>

<?php
$dbh = new PDO("mysql:host=localhost;dbname=grundstof",
               "root", "root");
$sql = "SELECT nr, navn, symbol FROM grundstoffer ";
$sql .= "ORDER BY nr;";
$stmt = $dbh->prepare($sql);
if ($stmt->execute()) {
  while ($row = $stmt->fetch()) {
    if($row["nr"]=="3")  
    
    {  echo "<tr>";
      echo "<td style=\"background: yellow\">" . $row["nr"] ."special". "</td>";    // can use ' ' in style
      
      echo "<td>" . $row["navn"] . "</td>";
      echo "<td>" . $row["symbol"] . "</td>";
      echo "</tr>";
    }
    else
    {
    echo "<tr>";
    echo "<td>" . $row["nr"] . "</td>";    
    echo "<td>" . $row["navn"] . "</td>";
    echo "<td>" . $row["symbol"] . "</td>";
    echo "</tr>";
    }
  }

}
?>

</table>
</body>
</html>