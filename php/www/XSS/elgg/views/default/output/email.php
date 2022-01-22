<?php
/**
 * Elgg email output
 * Displays an email address that was entered using an email input field
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['value'] The email address to display
 *
 */

//SEED: Modified to enable XSS.
//uncomment the below "$encoded_value = htmlspecialchars" statement and comment the "$encoded_value = $vars['value'];" to enable countermeasure.
//$encoded_value = htmlspecialchars($vars['value'], ENT_QUOTES, 'UTF-8');
$encoded_value = $vars['value'];

if (!empty($vars['value'])) {
	echo "<a href=\"mailto:$encoded_value\">$encoded_value</a>";
}
