<?php

echo "<table border='1'>
<tr>
	<td>Merk</td>
	<td>Stok</td>
	<td>Terjual</td>
	<td>Warna</td>
</tr>";
foreach ($konten as $rows => $row) {
	echo
	"<tr>";
	foreach ($row as $col => $cell) {
		echo "<td>" . $cell . "</td>";
	}
	echo "</tr>";
}
echo "</table>";