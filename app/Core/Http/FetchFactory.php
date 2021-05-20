<?php

namespace App\Core\Http;

use GuzzleHttp\Client;

class FetchFactory
{
	private Client $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function get(string $url, array $params = []): array
	{
		$query = $this->client->request('GET', $url, $params);

		$response = json_decode($query->getBody()->getContents(), true);

		$status = $query->getStatusCode();

		return [
			'response' => $response,
			'status' => $status,
		];
	}
}
