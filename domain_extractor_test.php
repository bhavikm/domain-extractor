<?php
require_once('domain_extractor.php');

$urls = array('http://dev.twitter.com/docs/api/1/get/statuses/user_timeline', 
			  'http://www.php.net/manual-lookup.php?pattern=lowercase&lang=en&scope=quickref', 
			  'http://www.theage.com.au', 
			  'http://theage.com.au', 
			  'http://theage.com.au/firstroundcapital/', 
			  'http://www.theage.com.au/firstroundcapital',
			  'http://youtube.ru/900923/',
			  'https://dev.twitter.com/docs/api/1/get/statuses/user_timeline', 
			  'https://www.php.net/manual-lookup.php?pattern=lowercase&lang=en&scope=quickref', 
			  'https://www.theage.com.au', 
			  'https://theage.com.au', 
			  'https://theage.com.au/firstroundcapital/', 
			  'https://www.theage.com.au/firstroundcapital',
			  'https://youtube.ru/900923/');


foreach ($urls as $url)
{
	$tld = DomainExtractor::extract_tld($url);
	echo $url.' => <b>'.$tld.'</b><br /><br />';
	
}

?>