<?php

namespace Beth\Views\Woocommerce\Product;

class ProductMetaView
{
	/**
	 * @var array
	 */
	private $meta;

	public function __construct(array $meta)
	{
		$this->meta = $meta;
	}

	public function __invoke()
	{
		$html = '<table class="meta-table">
					<thead>
						<th>' . __('Color', 'beth') . '</th>
						<th>' . __('Size', 'beth') . '</th>
					</thead>
					<tbody>
						<tr>
							<td>' . $this->meta['color'] . '</td>
							<td>' . $this->meta['size'] . '</td>
						</tr>
					</tbody>
				</table>';

		echo $html;
	}
}
