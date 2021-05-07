<?php

namespace App\Services\Facades;

use App\Models\Video as VideoModel;

class Video extends BaseFacade
{
	public static string $className = VideoModel::class;
}
