<?php

namespace Beth\Actions\Woocommerce\Product;

use Beth\Database\Queries\Woocommerce\Product\GetProductMetaQuery;
use Beth\Views\Woocommerce\Product\ProductMetaView;

class PrintProductMetaAction
{
	public function execute(\WP_Post $post)
	{
		$meta = invoke(GetProductMetaQuery::class, $post);

		invoke(ProductMetaView::class, json_decode($meta, true));
	}
}
