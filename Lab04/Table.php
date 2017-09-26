<?php
	echo "<table>";
   for($y = 0; $y <= 100; $y++) 
   {
	   echo "<tr>";
	   for($x = 0; $x <= 100; $x++)
	   {
		   if($x == 0 && $y == 0)
			   echo "<td> </td>";
		   else if($y == 0)
			   echo "<td>".$x."</td>";
		   else if($x == 0)
			   echo "<td>".$y."</td>";
		   else
			echo "<td>".$y*$x."</td>";
	   }
	   echo "</tr>";
   }
   echo "</table>";
?>