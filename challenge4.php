<?php
$array = array(10,10,10,20,20,20);
$vals = array_count_values($array);
echo 'Items Duplicates are: '.count($vals).'<br><br>';
print_r($vals);
?>