<?php

/**
 * XmlToJson
 * https://lostechies.com/seanbiefeld/2011/10/21/simple-xml-to-json-with-php/
 */
class XmlToJson {

	public static function Parse ($url) {
		$fileContents= file_get_contents($url);
		$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
		$fileContents = trim(str_replace('"', "'", $fileContents));
		$simpleXml = simplexml_load_string($fileContents);
		$json = json_encode($simpleXml);

		return $json;
	}
}

echo XmlToJson::Parse('https://blog.wearecontrast.com/feed');
