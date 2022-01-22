<?php
/**
 * Elgg dropdown display
 * Displays a value that was entered into the system via a dropdown
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['text'] The text to display
 *
 */

//SEED: Modified to enable XSS.
//uncomment the below "echo htmlspecialchars(" statement and comment the "echo $vars['value'];" to enable countermeasure.
//echo htmlspecialchars($vars['value'], ENT_QUOTES, 'UTF-8', false);
echo $vars['value'];
