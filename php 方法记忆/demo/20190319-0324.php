<?php
$search_arr = ['A'=>'john','b'=>'load','c'=>'ada','d'=>'jack'];
$a = array_search('ada', $search_arr);
print_r($a);
echo "<hr />";
$b = array_change_key_case($search_arr,0);
print_r($b);
###