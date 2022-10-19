<?php

if (!empty($_POST['overskrift'])) {
$overskrift = $_POST['overskrift'];
$beskrivelse = $_POST['beskrivelse'];

include_once 'connection.php';
$fordring =
"INSERT INTO opskrifter (overskrift, beskrivelse)
VALUES ('$overskrift', '$beskrivelse')";
$svar = $forbindelse->query($fordring);

header('location: indexkage.php');

}
?>

<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         overskrift: <input type = "text" name = "overskrift" />
         beskrivelse: <input type = "text" name = "beskrivelse" />
         <input type = "submit" />
      </form>
   
   </body>
</html>