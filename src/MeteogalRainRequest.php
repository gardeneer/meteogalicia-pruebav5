<?php
namespace Parafusodixital\MeteogaliciaApiv5;

class MeteogalRainRequest
{
	const BASE_URL = 
		"https://servizos.meteogalicia.gal/apiv5/getNumericForecastInfo";

	private $apiKey;

	function __construct($apiKey)
	{
		$this->apiKey = $apiKey;
	}

	function getPrecipitation($coords)
	{
		$url = "https://servizos.meteogalicia.gal/apiv5/getNumericForecastInfo?coords=-8.6695627,42.2151947&variables=precipitation_amount&startTime=2026-03-03T00"
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);

		$result = curl_exec($ch);
		$json = json_decode($result, TRUE);
		$json2 = $json[2];
		var_dump($json);
		//var_dump($json["features"]);//[0]["properties"]["days"][0]["variables"][0]["values"][0]);
	}

}

$coords = "-8.6695627,42.2151947";
$obj = new MeteogalRainRequest($api_key);
echo $obj->getPrecipitation($coords);
