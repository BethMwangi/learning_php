<?php

namespace App\Controllers;

use App\Core\Http\Fetch;

class CountryController extends BaseController
{
	public function index()
	{

		['response' => $response] = app('fetch')->get('https://api.bmbc.cloud/api/countries');

		$data = json_encode($response['data']);

		return response($data);
	}
}
