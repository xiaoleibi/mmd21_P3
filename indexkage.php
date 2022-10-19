<?php
include_once 'connection.php';
$fordring = "SELECT id, overskrift, beskrivelse FROM opskrifter";
$svar = $forbindelse->query($fordring);

?>

<html lang="da">
<head>
<title>Web-kokken forside</title>
<meta charset="utf-8" />
<meta name="author" content="xbi" />
<meta name="description" content="Web-kokken forside" />
</head>
<body>
    <h1>demo kage</h1>
<div>
<?php
  

while ($vis = $svar->fetch_object()) {
echo '<h1>'.$vis->overskrift.'</h1> ';
echo '<h2>'. 'Opskrift nr ' . $vis->id.'</h2>';
echo '<p>'.$vis->beskrivelse.'</p>';
echo '<a href="slet_i_db.php?id=';
echo $vis->id;
echo '"> Slet denne opskrift</a></p>';
}
?>

 
<a href="opret.php">Opret opskrift </a>
</div>
</body>
</html>