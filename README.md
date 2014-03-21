domain-extractor
================

Extracts top level parts from a url, can be used to identify source website of a stream of URLs.

Examples:

http://dev.twitter.com/docs/api/1/get/statuses/user_timeline => **dev.twitter.com**

http://www.php.net/manual-lookup.php?pattern=lowercase&lang=en&scope=quickref => **php.net**

http://www.theage.com.au => **theage.com.au**

http://theage.com.au => **theage.com.au**

http://theage.com.au/firstroundcapital/ => **theage.com.au**

http://www.theage.com.au/firstroundcapital => **theage.com.au**

http://youtube.ru/900923/ => **youtube.ru**

https://dev.twitter.com/docs/api/1/get/statuses/user_timeline => **dev.twitter.com**

https://www.php.net/manual-lookup.php?pattern=lowercase&lang=en&scope=quickref => **php.net**

https://www.theage.com.au => **theage.com.au**

https://theage.com.au => **theage.com.au**

https://theage.com.au/firstroundcapital/ => **theage.com.au**

https://www.theage.com.au/firstroundcapital => **theage.com.au**

https://youtube.ru/900923/ => **youtube.ru**
