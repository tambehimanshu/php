<?php
$rt = "string is";
echo $rt;
$len = strlen($rt);
echo "<br>length is ".$len ." jay siya ram ";
echo "<br> no of words in string ".str_word_count($rt) ." jay siya ram ";
echo "<br>reverse of str is ". strrev($rt) ." jay siya ram ";
echo "<br>search () in the string ". strpos($rt ,"is") ." jay siya ram ";

echo "<br> replace (string) from the string ". str_ireplace("string","STRING" ,$rt) 
?>