<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('fnAddScript'))
{
	/**
	 * Generate a script link with the base url based on the filepath
	 * @param  [type] $strFilePath [description]
	 * @return [type]              [description]
	 */
	function fnAddScript($strFilePath, $attr = array())
	{
		if(strpos($strFilePath, 'http') === false){
			$strFilePath = base_url($strFilePath);
		}
		$linkattr = '';
		foreach ($attr as $key => $value) {
			$linkattr .= $key.'="'.$value.'" '; 
		}
		return '<script src="'.$strFilePath.'" '.$linkattr.'></script>';			
	}
}