<?php
$homepage = file_get_contents('fr_lang.php');
echo base64_encode($homepage);
?>
