<?php

namespace Beth\Actions\Post;

use Beth\Actions\Post\Transformers\ShowTransformer;
use Beth\Actions\Post\Queries\ShowPostQuery;

class ShowAction
{
	use ShowTransformer;
	/**
	 * @var int
	 */
	private $id;

	public function __construct(int $id)
	{
		$this->id = $id;
	}

	public function __invoke()
	{
		$post = invoke(ShowPostQuery::class, $this->id);

		return $this->transform($post);
	}
}
