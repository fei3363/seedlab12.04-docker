<?php
/**
 * Elgg text output
 * Displays some text that was input using a standard text field
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['value'] The text to display
 */

//SEED: Modified to enable XSS.
//uncomment the below "echo htmlspecialchars" statement and comment the "echo $vars['value'];" to enable countermeasure.
//echo htmlspecialchars($vars['value'], ENT_QUOTES, 'UTF-8', false);
echo $vars['value'];
