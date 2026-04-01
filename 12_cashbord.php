<?php 

echo "<table border='1' cellspacing='0' cellpadding='20'>";

for($i=1;$i<=8;$i++){
    echo "<tr>";
    for($j=1;$j<=8;$j++){
       if(($i+$j)%2==0){
         echo  "<td style='background-color:black;'></td>";
       }else{
         echo  "<td style='background-color:white;'></td>";
       }
    }
    echo "</tr>";
}
echo "</table>";

?>

