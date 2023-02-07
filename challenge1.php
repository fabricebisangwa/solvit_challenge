<?php
function absent($my_list)
{
    $new_array = range($my_list[0], max($my_list));
    return array_diff($new_array , $my_list);
}
echo"Elements missing  from first array are:<br>";
print_r(absent(array(1,2,3,6,7)));


?>