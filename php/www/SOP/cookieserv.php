<?php
$inOneDay = 60 * 60 * 24 + time(); 
setcookie('lastVisit', date("F j, Y, g:i:s a"), $inOneDay); 
if(isset($_COOKIE['lastVisit']))
{
	$visit = $_COOKIE['lastVisit']; 
	echo "Your last visit was - ". $visit;
}
else
	echo "You've got some stale cookies!";
?>
