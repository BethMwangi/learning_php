<?php

namespace Beth\Actions\Post\Transformers;

trait ShowTransformer
{
	public function transform($post)
	{
		return [
			'id' => $post->ID,
			'post_date' => $post->post_date,
		];
	}
}
