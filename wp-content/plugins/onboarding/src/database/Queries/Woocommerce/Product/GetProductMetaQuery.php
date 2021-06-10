<?php

namespace Beth\Database\Queries\Woocommerce\Product;

class GetProductMetaQuery
{
	/**
	 * @var \WP_Post
	 */
	private $post;

	public function __construct(\WP_Post $post)
	{
		$this->post = $post;
	}

	public function __invoke()
	{
		global $wpdb;

		$table = $wpdb->base_prefix . 'products_meta';

		$sql = "SELECT `meta` FROM $table 
				WHERE `product_id` = {$this->post->ID}";

		return $wpdb->get_var($sql);
	}
}
