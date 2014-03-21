<?php
class DomainExtractor {
	
	public static function extract_tld($url)
	{
		$url2 = trim($url);
		$url2 = strtolower($url2);
		//first get rid of http:// or https://
		$url2 = str_replace('http://', '', $url2);
		$url2 = str_replace('https://', '', $url2);
		
		//get rid of www., m., mobile. if it exists as a prefix to the url
		$url2 = self::remove_prefix_from_string('www.',$url2);
		$url2 = self::remove_prefix_from_string('m.',$url2);
		$url2 = self::remove_prefix_from_string('mobile.',$url2);
		
		$first_forward_slash_position = strpos($url2, '/');
		
		if ($first_forward_slash_position !== FALSE)
		{
			$url2 = substr($url2,0,$first_forward_slash_position);
		}

		return $url2;
	}
	
	//slightly faster than equivalent regex
	private static function remove_prefix_from_string($prefix,$str)
	{
		if (substr($str, 0, strlen($prefix)) == $prefix) {
		    $str = substr($str, strlen($prefix), strlen($str));
		}
		
		return $str;
	}
	
}
?>