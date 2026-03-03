<?php
namespace Parafusodixital\MeteogaliciaApiv5;

class MeteogalRainData
{
	private $precipitationAmount;

	function __construct($amount)
	{
		$this->precipitationAmount = $amount;
	}

	function getPrecipitationAmount()
	{
		return $this->precipitationAmount; 
	}

	function __toString()
	{
		return
			"[MeteogalRainData: " .
			"precipitationAmount = $this->precipitationAmount]";
	}
}
