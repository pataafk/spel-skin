<?php
header("Content-type: text/plain; charset=utf-8");
$dbh = new PDO('mysql:host=localhost; dbname=ej_dt_site', 'phpuser', 'pizza');
if (! $dbh ) {
  echo "Kontakta ej etablerad";
  exit;
}
echo "Kontakt etablerad. Hurral!";
?>