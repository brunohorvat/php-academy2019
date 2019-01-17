<?php

$arr = explode(",",$_GET["numbers"]);

sort($arr);
$max = $arr[count($arr)-1];

$x = (int)sqrt($max)+1;


$style = <<<IPA
<style>
table {
    border-collapse: collapse;
  }
  
  table, th, td {
    border: 1px solid black;
  }
  td{
    line-height: 25px;
    min-width: 25px;
    text-align: right;
  }
</style>
IPA;
echo $style;


echo "<table>";
$printMean=false;
$c=1;
for($i=0;$i<$x;$i++){
    echo "<tr>";
    for($j=0;$j<$x;$j++){
        echo "<td>";
        if($c%2===0 && in_array($c, $arr)){
            if(!$printMean && $c> array_sum($arr)/count($arr)){
                echo "<span style=\"font-weight: bold;\">", $c, "</span>";
                $printMean=true;
            }else{
                echo $c;
            }
            
        }else{
            echo "&nbsp;";
        }
        echo "</td>";
        $c++;
    }
    echo "</tr>";
}



echo "</table>";