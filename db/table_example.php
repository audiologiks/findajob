<?php

$con=mysqli_connect("xxxxx","xxxxxx","xxxxxxx","xxxxxxxx");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `TABLENAME`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>NAME OF THE SECTION</th>
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='left'>" . $row['COLUMNHEADING'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>
