<?php

namespace Beth\Actions\Woocommerce\Product;

use Beth\Database\Queries\Woocommerce\Product\GetProductMetaQuery;

class PrintProductMetaAction
{
	public function execute(\WP_Post $post)
	{
		$meta = invoke(GetProductMetaQuery::class, $post);

		var_dump($meta);
	}
}
