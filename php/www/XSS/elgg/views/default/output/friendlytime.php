<?php
/**
 * Friendly time
 * Translates an epoch time into a human-readable time.
 * 
 * @uses string $vars['time'] Unix-style epoch timestamp
 */

$friendly_time = elgg_get_friendly_time($vars['time']);

//SEED: Modified to enable XSS.
//uncomment the below "$timestamp = htmlspecialchars" statement and comment the "$timestamp = date(" statement to enable countermeasure.
//$timestamp = htmlspecialchars(date(elgg_echo('friendlytime:date_format'), $vars['time']));
$timestamp = date(elgg_echo('friendlytime:date_format'), $vars['time']);

echo "<acronym title=\"$timestamp\">$friendly_time</acronym>";
