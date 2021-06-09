<?php

namespace Beth\Actions\Http\Countries;

class FetchCountriesAction
{
	protected int $transientTime = 3600; //seconds
	/**
	 * @return array
	 */
	public function execute(): array
	{
		if (get_transient('countries')) {
			return get_transient('countries');
		};

		$query = wp_remote_get('https://api.bmbc.cloud/api/countries');
		$data = json_decode(wp_remote_retrieve_body($query), true);
		$status = wp_remote_retrieve_response_code($query);

		$response = [
			'data' => $data,
			'status' => $status,
		];

		set_transient( 'countries', $response, $this->transientTime );

		return $response;
	}
}
