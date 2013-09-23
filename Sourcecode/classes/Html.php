<?php
/**
 * This class allows you to create HTML elements using functions.
 * This will make sure all HTML elements are the same each time.
 * Such as all local URLs including the domain instead of starting "/"
 * 
 * @author Chris Cutts
 *
 */
class Html  {
	
	function url($url="/", $linkText, $attributes=array(), $linkType="i") {
		
		$domain = httpOrHttps() . rtrim($_SERVER['HTTP_HOST'], '/');
		
		$htmlAttributes='';
		
		foreach ($attributes as $attribute => $value) {
			$htmlAttributes .= $attribute . '="' . $value . '" ';
		}
		
		$link = '<a href="' . $domain . $url . '"'.$htmlAttributes. '>' . $text . '</a>';
		
		return $link;
	}
	
	function httpOrHttps() {
		if (isset($_SERVER['HTTPS']) && $_SEREVER['HTTPS'] != 'off') {
			return 'https://';
		} else {
			return 'http://';
		}
	}
}