<?php

namespace App\Containers\VendorSection\Welcome\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

class Controller extends WebController
{
	public function sayWelcome()
	{
		return view('vendorSection@welcome::welcome-page');
	}
}
