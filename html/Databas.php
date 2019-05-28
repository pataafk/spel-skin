<?php
header("Content-type: text/plain; charset=utf-8");
$dbh = new PDO('mysql:host=localhost;dbname=ej_dt_site', 'phpuser', '1234');
if(! $dbh ) {
    echo "Kontakt ej etablera";
    exit;
}
echo "Kontakta etablerare. Hurra!";

print_r($dbh->errorInfo());
?>