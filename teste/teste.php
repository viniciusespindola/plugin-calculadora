<?php
/**
 * plugin name: ababa
*/

function abab ($atts) 
{
    return '<iframe src="'.plugins_url().'/teste/index.php" frameborder="0" width="400" height="330" style="border:0">';   //frameborder='0'  allowfullscreen></iframe>";
}

add_shortcode('teste', 'abab');