<?php
add_filter('tc_credits_display', 'my_custom_credits', 20);
function my_custom_credits(){ 
$credits = '';
$newline_credits = '';
return '
<div class="span6 credits">
    		    	<p> &middot; &copy; '.esc_attr( date( 'Y' ) ).' <a href="'.esc_url( home_url() ).'" title="'.esc_attr(get_bloginfo()).'" rel="bookmark">'.esc_attr(get_bloginfo()).'</a> &middot; '.($credits ? $credits : 'Developed by <a href="http://www.stevesdesigns.co.uk/">Steves Designs</a>').' &middot;'.($newline_credits ? '<br />&middot; '.$newline_credits.' &middot;' : '').'</p>		
