<head>
<style>
td{
    text-align: right;
}
</style>
</head>
<?php

// ispišite tablicu množenja 10 x 10

echo "<table style='width:50%'><tbody>";

for($i=0+1;$i<10+1;$i++){
    echo "<tr>";

    for($j=0+1;$j<10+1;$j++){
        echo "<td>" . ($i*$j) . "</td>";
    }

    echo "</tr>";
}



echo "</tbody></table>";