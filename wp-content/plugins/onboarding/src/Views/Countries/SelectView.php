<?php

namespace Beth\Views\Countries;

class SelectView
{
	/**
	 * @var array
	 */
	private $countries;

	public function __construct(array $countries)
	{
		$this->countries = $countries;
	}

	public function __invoke(): void
	{
		$html = '<label>Countries</label>
				 <select>';
		foreach($this->countries as $country) {
			$html .= '<option value=' . $country['country_code'] . '>' . $country['country_name'] . '</option>';
		}
		$html .=  '</select>';

		echo $html;
	}
}
