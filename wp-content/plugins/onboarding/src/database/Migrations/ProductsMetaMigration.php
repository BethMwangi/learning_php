<?php

namespace Beth\Database\Migrations;

class ProductsMetaMigration
{
	public function execute()
	{
		global $wpdb;

		$tableName = $wpdb->prefix . 'products_meta';

		$sql = "CREATE TABLE `$tableName` (
				`id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
				`product_id` INT(11) UNSIGNED NULL DEFAULT NULL,
				`meta` VARCHAR(255) NULL, 
			     PRIMARY KEY (`id`)
			)
			COLLATE='utf8_unicode_ci'
			ENGINE=InnoDB;
		";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);

		return $this->tableExists($tableName);
	}

	protected function tableExists(string $tableName): bool
	{
		global $wpdb;

		return ( $wpdb->get_var("SHOW TABLES LIKE '{$table_name}'") === $table_name );
	}
}
