<?php

namespace Beth\Actions\Post\Queries;

class ShowPostQuery
{
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
		global $wpdb;

		$table1 = $wpdb->prefix . 'posts';
		$table2 = $wpdb->prefix . 'postmeta';

		$sql = "SELECT $table1.*, $table2.* 
				FROM $table1 
				LEFT JOIN $table2 ON $table1.`ID` = $table2.`post_id`
				WHERE `ID`= $this->id";

		return $wpdb->get_row($sql);
	}
}
