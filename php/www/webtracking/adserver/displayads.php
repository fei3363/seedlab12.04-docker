<?php


if(isset($_COOKIE['track'])){
    $cookie = $_COOKIE['track'];
}


$con=mysqli_connect("localhost","wtuser","seeduser","revive_adserver");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT pd.ProductID, pd.ProductName,pd.ProductDescription,ct.CategoryName,GetImpressionCount(".$cookie.",il.TrackGUID) AS ImpressionCount,rb.filename,rb.width,rb.height
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
while($row = mysqli_fetch_array($result)) {

	if($MaxCount < $row['ImpressionCount'])
	{
		//echo "In if";
  		$MaxCount = $row['ImpressionCount'];
  		$MaxImpressedImage = $row['filename'];
		$MaxProduct = $row['ProductName'];
		$MaxCategory = $row['CategoryName'];
		$width= $row['width']/2;
		$height=$row['height']/2;
		
	}
	
  //echo $row['ProductName'] . " " . $row['CategoryName']. " " . $row['ImpressionCount']. " " . $row['filename'];
  //echo "<br>";
}

if(isset($_COOKIE['track'])){
echo "<img src=http://www.wtlabadserver.com/www/images/".$MaxImpressedImage." width=".$width."height=".$height." />";
}

mysqli_close($con);
?>
