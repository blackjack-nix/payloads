<?php
// Affiche le nom d'utilisateur qui fait tourner le processus php/http
// (sur un système ayant "whoami" dans le chemin d'exécutables)
$output=null;
$retval=null;
exec('whoami', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);
?>
