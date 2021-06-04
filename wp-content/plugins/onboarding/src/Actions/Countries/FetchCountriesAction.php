<?php

namespace Beth\Actions\Countries;

class FetchCountriesAction
{
	protected int $transientTime = 3600; //seconds
	/**
	 * @return array
	 */
	public function __invoke(): array
	{
		if (get_transient('countries')) {
			return get_transient('countries');
		};

		$args = [
			'method' => 'GET',
			'headers' => [
				'authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI3IiwianRpIjoiNDcwMjVhYWQ0M2Q2NGExYzU0ODYzMWMxNGQ4NjFkNzY5ZWMwZmQxOTU5YTljMDFiYmQwZGRkNzRmYjlkMDlhMTRmZGY2YzBjZmZlMjgxNWIiLCJpYXQiOiIxNjIyNjkyNTc4LjI5NzU5MyIsIm5iZiI6IjE2MjI2OTI1NzguMjk3NjE3IiwiZXhwIjoiMTY1NDIyODU3OC4yODUzODkiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.558gxBnsb87NNgFWK79uujM8NPpc6cYtoCi5Wt0OxAEhB918Rfaxim2jJaBnKkmGuyksXTm0I1u2cmDhxwbqDH5JQog5wVe_0evMBX6F2L60fADMw2MSvvfo7pUFdKW1Xvyd5Ri5IaDO3Fs1-P_R_3TeSw_lLa8N0qa5r5fcaTXweIjFmCgR8yOeChxiu1rZMBwi8cyM8zPNIMqWwviPBgZ35yi6fl1qJnzg2hxQ0B9Cu2_ZongnO0kA5F-Gz1Sr9qEkHy5OeKh-qyvpU1klmd27YRGmm5FsdHVpNGKCubm-eQcMgM9E-rFToCzw2k1saeXUdIxnmmKw2M1daEK9YT6jU5qT8GYWf_QI9TIyqSSj5KQ_dTJE7RQWVMpyNedAuYHWGxRXDbxex7Y5EJlOuxl8uP0aebN1gvXE8eAzPt99ZST7GqmsbiAvkj6qD3jaVKWjSerwgtLG6pQLBEWeXq6sMvoUAjpujLLNhf8cjA0qj8vaBQEw3wq0NW2BJmpLXoq8hXE1Y355K-hUZQUuI5PUbfDzle8nWvv9M1ZItbVXrnX8th9_4jLwF-zYCY_rPeD1wO1XTtSBIn469QwqFskkmGNVwXvOFmzdI9E_IAPE37M1hBEPjd-PLOfo4640tks6gT455fLawAy_tfMVJIQXuurI-yBzIRkjQYWuU14',
			],
			'body' => [
				'page' => 2,
				'sort_by' => 'id',
				'order' => 'asc',
			]
		];

		$query = wp_remote_request('https://api.bmbc.cloud/api/countries', $args);
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
