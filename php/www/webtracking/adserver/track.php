<?php

function randomNumber($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}


$trackGuid = $_GET['guid'];
$userTrack = randomNumber(16);

if(isset($_COOKIE['track'])){
    $cookie = $_COOKIE['track'];
	//echo "is  set";
	//echo $cookie;
}
else{
    // Cookie is not set
	setcookie('track', $userTrack,time()+3600*24*10);

	$cookie = $userTrack;
	//echo $cookie;
	//echo "is not set";
}


$con=mysqli_connect("localhost","wtuser","seeduser","revive_adserver");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}





mysqli_query($con,"INSERT INTO `bt_ImpressionLog` (
`ImpressionID` ,
`SessionID` ,
`TrackGUID` ,
`TrackingID`
)
VALUES (
NULL , ".$cookie.",".$trackGuid.", 'NULL'
);");



mysqli_close($con);




?>

