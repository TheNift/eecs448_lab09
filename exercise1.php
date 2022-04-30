<?php
echo "<table>";
for ($y = 1; $y < 12; $y++) {
    echo "<tr>";
    for ($x = 1; $x < 11; $x++) {
        if($x == 1) {
          	$temp1 = $y - 1;
            echo "<td>$temp1</td>";
        }
      	if ($y == 1) {
            echo "<td>$x</td>";
        }
      	if ($x && $y != 1) {
            $temp = $x * ($y - 1);
            echo "<td>$temp</td>";
        }
      }
    echo "</tr>";
}
echo "</table>";
?> 