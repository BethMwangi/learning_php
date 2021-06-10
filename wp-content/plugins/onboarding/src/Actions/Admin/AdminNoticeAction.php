<?php

namespace Beth\Actions\Admin;

use Beth\Actions\Http\Countries;
use Beth\Views\Countries\SelectView;

class AdminNoticeAction
{
	public function execute()
	{
		/*-- fetch countries action --*/
		['data' => $data, 'status' => $status] = trigger(Countries\FetchCountriesAction::class);
		/*-- selector view --*/
		invoke(SelectView::class, $data['data']);
	}
}
