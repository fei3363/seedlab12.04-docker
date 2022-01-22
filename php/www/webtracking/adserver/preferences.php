<?php


if(isset($_COOKIE['track'])){
    $cookie = $_COOKIE['track'];
}


$con=mysqli_connect("localhost","wtuser","seeduser","revive_adserver");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT pd.ProductID, pd.ProductName,pd.ProductDescription,ct.CategoryName,GetImpressionCount(".$cookie.",il.TrackGUID) AS ImpressionCount,rb.filename,rb.width,rb.height,il.TrackGUID
FROM bt_Products AS pd
JOIN bt_TrackInventory ti
ON ti.ProductID = pd.ProductID
JOIN bt_Category ct
ON ct.CategoryID = pd.CategoryID
JOIN bt_ImpressionLog  il
ON il.TrackGUID = ti.TrackGUID
JOIN rv_banners as rb
ON rb.bannerid = pd.BannerID
WHERE il.SessionID = ".$cookie."
GROUP BY pd.ProductID");
$MaxCount = 0;

echo "<table border='1'>
<tr>
<th>Product Guid</th>
<th>Product </th>
<th>Category</th>
<th>Impression Count</th>
<th>UserTrackID</th>
</tr>";




while($row = mysqli_fetch_array($result)) {

	echo "<tr>";
  echo "<td>" . $row['TrackGUID'] . "</td>";
  echo "<td>" . $row['ProductName'] . "</td>";
  echo "<td>" . $row['CategoryName']. "</td>";
  echo "<td>" . Ceil(($row['ImpressionCount']/2)). "</td>";
  echo "<td>" . $cookie . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>
