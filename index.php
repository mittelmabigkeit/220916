<meta charset="utf-8">
<?php
$str="Таким образом укрепление и развитие структуры обеспечивает широкому кругу участие в формировании дальнейших направлений развития.";
$from="windows-1251";
$to="iso8859-5";
echo convert_cyr_string($str, $from, $to);
echo "</br>";
echo "</br>";
$number=66.6666;
echo sprintf("%01.1f<br>",$number);
echo "</br>";
echo "</br>";
$st="Таким образом укрепление и развитие структуры \n обеспечивает широкому кругу участие в формировании \n дальнейших направлений развития.";
$string=nl2br($st);
echo $string;
echo "</br>";
echo "</br>";
$stroka="Таким образом укрепление и развитие структуры обеспечивает широкому кругу участие в формировании дальнейших направлений развития.";
$wdth=20;
$break="\n";
echo wordwrap($stroka,$wdth,$break);
?>