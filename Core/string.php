<?php


$text = sprintf("Đây là %s","Hung");
// echo $text;
$str = "Hello world!";
var_dump($str);
echo "Length            : ".strlen($str);
echo "<br> Count word   : ".str_word_count($str);
echo "<br> Reverser     : ".strrev($str);
echo "<br> Find word    : ".strpos($str,"world");
echo "<br> replace word : ".str_replace("world","Hung",$str);
echo "<br> spit word    : ".print_r(mbsplit(" ",$str));
echo "<br> sub string   : ".substr($str,6,12);
echo "<br> lower string : ".strtolower($str);
echo "<br> upper string : ".strtoupper($str);
echo "<br> find number of word : ".strspn($str,"Hello"); // đếm số kí tự trùng nhau từ đầu trở đi
echo "<br> compare      : ".strcasecmp($str,"hung");
echo "<br> compare no ingnore : ".strncasecmp($str,"Hello",6);
echo "<br> Uppercase character first  : ".ucfirst($str);
echo "<br> Uppercase each word first  : ".ucwords($str);


$myText = "Wrap a string into new lines when it reaches a specific length:";
echo wordwrap($myText,15,"<br>");

$myTag = "<br>hello <h1>Hung</h1>";
echo $myTag;
echo "<br> Extract the string from HTML tags  : ".strip_tags($myTag);

echo "<br> Repeat string : ".str_repeat($str,5);
echo "<br> String padding : ".str_pad($str,20 ,".");

$myQuery = "name=hung&age=43";
echo "Parse a query string into variables : ";
parse_str("name=hung&age=43", $array);
echo $array["name"]. $array["age"];
?>
