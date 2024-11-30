<?php 

$date ="1993-01-04";
$pattern = "/[-\s:]/";
$result = preg_split($pattern,$date);
print_r( $result );

?>